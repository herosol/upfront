<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('mcategories_model');
        $this->load->model('homec_model');
    }

	public function index()
	{
        $this->data['site_content'] = $this->master->getRow('sitecontent', array('ckey' => 'home'));
        $this->data['site_content'] = unserialize($this->data['site_content']->code);
        $this->data['featured_categories'] = $this->mcategories_model->get_rows(['is_featured'=> '1']);
        $this->data['fascinates'] = $this->homec_model->get_rows(['section_type'=> 'fascinates']);
        $this->data['stars'] = $this->homec_model->get_rows(['section_type'=> 'star_viewing']);
		$this->load->view('pages/index', $this->data);
	}

    public function register()
    {
        $this->MemLogged();
        if($this->input->post()) {
            $res = array();
            $res['hide_msg'] = 0;
            $res['scroll_to_msg'] = 0;
            $res['frm_reset'] = 0;
            $res['status'] = 0;

            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');
            $this->form_validation->set_rules('confirm', 'Confirm', 'required', array('required' => 'Please accept our terms and conditions'));
            if($this->form_validation->run() === FALSE)
            {
                $res['msg'] = validation_errors();
            }
            else
            {
                $post = html_escape($this->input->post());
                $user_row = $this->user_model->emailExists($post['email']);
                if (count($user_row) == '0')
                {
                    $rando = doEncode(rand(99, 999).'-'.$post['email']);
                    $rando = strlen($rando) > 225 ? substr($rando, 0, 225) : $rando;

                    $save_data = 
                    [
                        'user_fname' => ucfirst($post['fname']), 
                        'user_lname' => ucfirst($post['lname']),
                        'user_email' => $post['email'],
                        'user_pswd' => doEncode($post['password']),
                        'user_last_login' => date('Y-m-d h:i:s'),
                        'mem_code' => $rando
                    ];

                    $user_id = $this->user_model->save($save_data);
                    $this->session->set_userdata('user_id', $user_id);
                    $this->session->set_userdata('user_type', 'user');

                    $verify_link  = site_url('verification/' .$rando);
                    $user_data    = array('name' => ucfirst($post['fname']).' '.ucfirst($post['lname']), "email" => $post['email'], "link" => $verify_link);
                    $is_email_send = $this->send_site_email($user_data, 'signup');

                    $res['msg'] = showMsg('success', 'Registered Successfully');
                    $res['redirect_url'] = site_url('dashboard');
                    $res['status'] = 1;
                    $res['frm_reset'] = 1;
                }
                else
                {
                    $res['msg'] = showMsg('error', 'E-mail Address Already In Use!');
                }
            }
            exit(json_encode($res));
        }else{
            $this->data['site_content'] = $this->master->getRow('sitecontent', array('ckey' => 'signup'));
            $this->data['site_content'] = unserialize($this->data['site_content']->code);
            $this->load->view("profile/signup", $this->data);
        }
    }

    public function model_signup()
    {
        if($this->input->post())
        {
            $res = array();
            $res['hide_msg'] = 0;
            $res['scroll_to_msg'] = 0;
            $res['frm_reset'] = 0;
            $res['status'] = 0;

            if(empty($this->session->user_id))
            {
                $this->form_validation->set_rules('fname', 'First Name', 'required');
                $this->form_validation->set_rules('lname', 'Last Name', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
                $this->form_validation->set_rules('password', 'Password', 'required');
                $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');
            }

            $this->form_validation->set_rules('phone', 'Phone', 'required');
            $this->form_validation->set_rules('confirm', 'Confirm', 'required', array('required' => 'Please accept our terms and conditions'));
            if($this->form_validation->run() === FALSE)
            {
                $res['msg'] = validation_errors();
            }
            else
            {
                $post = html_escape($this->input->post());
                if(empty($this->session->user_id))
                {
                    $user_row = $this->user_model->emailExists($post['email']);
                }
                else
                {
                    $user_row = [];
                }
                
                if (count($user_row) == '0')
                {
                    if (isset($_FILES["dp_image"]["name"]) && $_FILES["dp_image"]["name"] != "")
                    {
                        $image = upload_file(UPLOAD_PATH.'members', 'dp_image');
                        $mem_image = $image['file_name'];
                    }


                    $rando = doEncode(rand(99, 999).'-'.$post['email']);
                    $rando = strlen($rando) > 225 ? substr($rando, 0, 225) : $rando;

                    if(empty($this->session->user_id))
                    {
                        $save_data = 
                        [
                            'user_fname' => ucfirst($post['fname']), 
                            'user_lname' => ucfirst($post['lname']),
                            'mem_phone'      => $post['phone'],
                            'user_email' => $post['email'],
                            'mem_about'  => $post['bio'],
                            'user_pswd'  => doEncode($post['password']),
                            'user_last_login' => date('Y-m-d h:i:s'),
                            'mem_image'  => $mem_image,
                            'user_type'  => 'model',
                            'mem_code' => $rando
                        ];
                    }
                    else
                    {
                        $save_data = 
                        [
                            'mem_phone'  => $post['phone'],
                            'mem_about'  => $post['bio'],
                            'user_last_login' => date('Y-m-d h:i:s'),
                            'mem_image'  => $mem_image,
                            'user_type'  => 'model'
                        ];
                    }

                    $user_id = $this->user_model->save($save_data, $this->session->user_id);

                    if($user_id > 0)
                    {
                        if(isset($_FILES['gallery_images']) && is_array($_FILES['gallery_images']['name']))
                        {
                            $image_path = array();          
                            $count = count($_FILES['gallery_images']['name']);   
                            for($key =0; $key < $count; $key++)
                            {     
                                $_FILES['file'.$key]['name']     = $_FILES['gallery_images']['name'][$key]; 
                                $_FILES['file'.$key]['type']     = $_FILES['gallery_images']['type'][$key]; 
                                $_FILES['file'.$key]['tmp_name'] = $_FILES['gallery_images']['tmp_name'][$key]; 
                                $_FILES['file'.$key]['error']    = $_FILES['gallery_images']['error'][$key]; 
                                $_FILES['file'.$key]['size']     = $_FILES['gallery_images']['size'][$key]; 
                                      
                            }
            
                            for($i=0; $i<$count; $i++)
                            {
                                if (isset($_FILES["file".$i]["name"]) && $_FILES["file".$i]["name"] != "") 
                                {
                                    $image = upload_file(UPLOAD_PATH.'members', 'file'.$i);
                                    generate_thumb(UPLOAD_PATH . "members/", UPLOAD_PATH . "members/", $image['file_name'],100,'thumb_');
                                    generate_thumb(UPLOAD_PATH . "members/", UPLOAD_PATH . "members/", $image['file_name'],300,'300p_');
                                    $gallery_record = 
                                    [
                                        'mem_id' => $user_id,
                                        'image'  => $image['file_name'],
                                        'status' => 1
                                    ];

                                    $this->master->save('mem_gallery_images', $gallery_record);
                                }
                            }
                        }
                    }

                    $this->session->set_userdata('user_id', $user_id);
                    $this->session->set_userdata('user_type', 'model');

                    if(empty($this->session->user_id))
                    {
                        $verify_link  = site_url('verification/' .$rando);
                        $user_data    = array('name' => ucfirst($post['fname']).' '.ucfirst($post['lname']), "email" => $post['email'], "link" => $verify_link);
                        $is_email_send = $this->send_site_email($user_data, 'signup');
                    }

                    $res['msg'] = showMsg('success', 'Registered Successfully');
                    $res['redirect_url'] = site_url('dashboard');
                    $res['status'] = 1;
                    $res['frm_reset'] = 1;
                }
                else
                {
                    $res['msg'] = showMsg('error', 'E-mail Address Already In Use!');
                }
            }
            exit(json_encode($res));
        }
        else
        {
            $this->data['site_content'] = $this->master->getRow('sitecontent', array('ckey' => 'signup_model'));
            $this->data['site_content'] = unserialize($this->data['site_content']->code);
            $this->load->view("profile/model-signup", $this->data);
        }
    }


    function login()
    {
        $this->MemLogged();
        if($this->input->post()) 
        {
            $res = array();
            $res['frm_reset'] = 0;
            $res['hide_msg'] = 0;
            $res['scroll_to_msg'] = 0;
            $res['status'] = 0;
            $res['redirect_url'] = 0;
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if($this->form_validation->run() === FALSE)
            {
                $res['msg'] = validation_errors();
            }
            else
            {
                $data = $this->input->post();
                $row  = $this->user_model->authenticate($data['email'], $data['password']);
                if (count($row) > 0) 
                {
                    if($row->user_status== 0)
                    {
                        $res['msg'] = showMsg('error', showMsg('Your account has been blocked!'));
                        exit(json_encode($res));
                    }

                    /*if($row->mem_verified== 0){
                        $res['msg'] = showMsg('error', 'Please verify email to access your account!');
                        exit(json_encode($res));
                    }
                    */
                    $remember_token = '';
                    if(isset($data['remeberMe']))
                    {
                        $remember_token = doEncode('member-'.$row->user_id);
                        $cookie = array('name'   => 'remember', 'value'  => $remember_token, 'expire' => (86400*7));
                        $this->input->set_cookie($cookie);
                    }

                    $this->user_model->update_last_login($row->user_id, $remember_token);
                    $this->session->set_userdata('user_id', $row->user_id);
                    $this->session->set_userdata('user_type', $row->user_type);

                    if ($row->mem_verified == 0)
                        $this->session->set_userdata('verification_status', true);

                    if(!empty($this->session->userdata('redirect_url')))
                        $res['redirect_url'] = $this->session->userdata('redirect_url');
                    else
                        $res['redirect_url'] = site_url('dashboard');   

                    $res['msg'] = showMsg('success', 'Login successful! Please wait.');
                    $res['status'] = 1;
                    $res['frm_reset'] = 1;
                    $res['hide_msg'] = 1;
                }
                else
                {
                    $res['msg'] = showMsg('error', 'Invalid email or password');
                }
            }
            exit(json_encode($res));
        }
        else
        {
            $this->data['site_content'] = $this->master->getRow('sitecontent', array('ckey' => 'login'));
            $this->data['site_content'] = unserialize($this->data['site_content']->code);
            $this->load->view("profile/signin", $this->data);
        }
    }

    function verification($vcode = '')
    {
        $this->MemLogged();
        if ($row = $this->user_model->getMemCode($vcode, intval($this->session->user_id)))
        {
            if($this->session->has_userdata('user_id') && $this->session->user_id != $row->user_id)
            {
                setMsg('info', 'You are already logged in with different email!');
                redirect('dashboard', 'refresh');
                exit;
            }
            $this->user_model->save(array('mem_verified' => 1, 'mem_code' => ''), $row->user_id);
            
            // $redirect_url = $this->session->mem_type == 'buyer' ? 'account-settings' : 'dashboard';
            setMsg('success', 'Your account has been successfully verified!');
            redirect('dashboard', 'refresh');
            exit;
        }
        else 
        {
            redirect('', 'refresh');
            exit;
        }
    }

    function forgot_password()
    {
        $this->MemLogged();
        if ($this->input->post()) {
            $res = array();
            $res['hide_msg'] = 0;
            $res['scroll_to_msg'] = 0;
            $res['status'] = 0;
            $res['frm_reset'] = 0;
            $res['redirect_url'] = 0;

            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            if($this->form_validation->run() === FALSE) {
                $res['msg'] = validation_errors();
                $res['status'] = 0;
            } else {
                $post = $this->input->post();
                if ($mem = $this->user_model->forgotEmailExists($post['email']))
                {
                    // $settings = $this->data['site_settings'];
                    $rando = doEncode(randCode(rand(15, 20)));
                    $this->master->save('users', array('mem_code' => $rando), 'user_id', $mem->user_id);

                    $reset_link = site_url('reset/' . $rando);
                    $mem_data   = array('name' => $mem->user_fname.' '.$user->mem_lname, "email" => $mem->user_email, "link" => $reset_link);
                    $this->send_site_email($mem_data, 'forgot_password');
                    $res['msg'] = showMsg('success','We’ve sent a reset password link to the email address you entered to reset your password. If you don’t see the email, check your spam folder or email!');


                    $res['status'] = 1;
                    $res['frm_reset'] = 1;
                } else {
                    $res['msg'] = showMsg('error', 'No such email address exists. Please try again!');
                    $res['status'] = 0;
                }
            }
            exit(json_encode($res));
        } else {
            $this->data['site_content'] = $this->master->getRow('sitecontent', array('ckey' => 'forgot'));
            $this->data['site_content'] = unserialize($this->data['site_content']->code);
            $this->load->view("profile/forgot-password", $this->data);
        }
    }

    function reset_password()
    {
        $reset_id = intval($this->session->userdata('reset_id'));
        if ($row = $this->user_model->getMember($reset_id)) 
        {
            if ($this->input->post()) {
                $res = array();
                $res['hide_msg'] = 0;
                $res['scroll_to_msg'] = 0;
                $res['status'] = 0;
                $res['frm_reset'] = 0;
                $res['redirect_url'] = 0;

                $reset_id = intval($this->session->userdata('reset_id'));
                if ($row = $this->user_model->getMember($reset_id)) 
                {
                    $this->form_validation->set_rules('pswd', 'New Password', 'required');
                    $this->form_validation->set_rules('cpswd', 'Confirm Password', 'required|matches[pswd]');
                    if($this->form_validation->run() === FALSE)
                    {
                        $res['msg'] = validation_errors();
                    }
                    else
                    {
                        $post = html_escape($this->input->post());
                        $this->user_model->save(array('user_pswd' => doEncode($post['pswd'])), $reset_id);
                        $this->session->unset_userdata('reset_id');
                        $res['msg'] = showMsg('success', 'You have successfully reset your password!');

                        $res['redirect_url'] = site_url('signin');
                        $res['status'] = 1;
                        $res['frm_reset'] = 1;
                        $res['hide_msg'] = 1;
                    }
                }
                else
                {
                    $res['msg'] = showMsg('error', 'Something is wrong, try again later!');
                }
                exit(json_encode($res));
            }
            else
            {
                $this->data['site_content'] = $this->master->getRow('sitecontent', array('ckey' => 'reset'));
                $this->data['site_content'] = unserialize($this->data['site_content']->code);
                $this->load->view("profile/reset-password", $this->data);
            }
        }
        else
        {
            redirect('', 'refresh');
            exit;
        }
    }

	function newsletter()
	{
        $res=array();
        $res['hide_msg']=0;
            $res['scroll_to_msg']=1;
            $res['status'] = 0;
            $res['frm_reset'] = 0;
            $res['redirect_url'] = 0;

        $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[newsletter.email]',
            array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already joined.'
            ));
        if($this->form_validation->run()===FALSE)
        {
            $res['msg'] = validation_errors();
            $res['status'] = 0;
        }else{
            $email=html_escape($this->input->post('email'));

            $this->master->save('newsletter',array('email'=>$email,'mem_id'=>$this->session->mem_id));
            $res['msg'] = showMsg('success','Joined successful!');
            $res['status'] = 1;
            $res['frm_reset'] = 1;
            $res['hide_msg']=1;
        }
        exit(json_encode($res));
    }

    function reset($vcode)
    {
        if ($row = $this->user_model->getMemCode($vcode)) 
        {
            $this->user_model->save(array('mem_code' => ''), $row->user_id);
            $this->session->set_userdata('reset_id', $row->user_id);
            redirect('reset-password', 'refresh');
            exit;
        }
        else
        {
            redirect('', 'refresh');
            exit;
        }
    }

    function logout()
    {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('user_type');
        $this->session->unset_userdata('redirect_url');
        $this->load->helper('cookie');
        delete_cookie('remember');
        redirect('signin', 'refresh');
        exit;
    }
}
