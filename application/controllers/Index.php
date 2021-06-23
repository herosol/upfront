<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

	public function index()
	{
		$this->load->view('pages/index');
	}

    public function register()
    {
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
                        'user_last_login' => date('Y-m-d h:i:s')
                    ];

                    $user_id = $this->user_model->save($save_data);
                    $this->session->set_userdata('user_id', $user_id);
                    $this->session->set_userdata('user_type', 'user');

                    $res['msg'] = showMsg('success', 'Registered Successfully');

                    $verify_link = site_url('verification/' .$rando);
                    $mem_data    = array('name' => ucfirst($post['fname']).' '.ucfirst($post['lname']), "email" => $post['email'], "link" => $verify_link);
                    $this->send_site_email($mem_data, 'signup');

                    $res['redirect_url'] = site_url('email-verification');
                    $res['status'] = 1;
                    $res['frm_reset'] = 1;
                } else {
                    $res['msg'] = showMsg('error', 'E-mail Address Already In Use!');
                }
            }
            exit(json_encode($res));
        }else{
            $this->load->view("profile/signup");
        }
    }
}
