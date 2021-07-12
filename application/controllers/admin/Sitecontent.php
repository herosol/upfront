<?php

class Sitecontent extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->isLogged();
        has_access(8);
        $this->table_name = 'sitecontent';
    }

    public function home()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_home';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'home'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();

            for($i = 1; $i <= 2; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            
            for($i = 1; $i <= 4; $i++) {
                if (isset($_FILES["highlights_image".$i]["name"]) && $_FILES["highlights_image".$i]["name"] != "") {
                    $image = upload_file(UPLOAD_PATH.'images/', 'highlights_image'.$i);
                    if(!empty($image['file_name'])){
                        if (isset($content_row['highlights_image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['highlights_image'.$i]);
                        $vals['highlights_image'.$i] = $image['file_name'];
                    }
                }
                if (isset($_FILES["highlights_icon_image".$i]["name"]) && $_FILES["highlights_icon_image".$i]["name"] != "") {
                    $image = upload_file(UPLOAD_PATH.'images/', 'highlights_icon_image'.$i);
                    if(!empty($image['file_name'])){
                        if (isset($content_row['highlights_icon_image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['highlights_icon_image'.$i]);
                        $vals['highlights_icon_image'.$i] = $image['file_name'];
                    }
                }
            }
            for($i = 1; $i <= 3; $i++) {
                if (isset($_FILES["how_image".$i]["name"]) && $_FILES["how_image".$i]["name"] != "") {
                    $image = upload_file(UPLOAD_PATH.'images/', 'how_image'.$i);
                    if(!empty($image['file_name'])){
                        if (isset($content_row['how_image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['how_image'.$i]);
                        $vals['how_image'.$i] = $image['file_name'];
                    }
                }
            }   
            for($i = 1; $i <= 2; $i++){
                if (isset($_FILES["match_image".$i]["name"]) && $_FILES["match_image".$i]["name"] != "") {
                    $image = upload_file(UPLOAD_PATH.'images/', 'match_image'.$i);
                    if(!empty($image['file_name'])){
                        $vals['match_image'.$i] = $image['file_name'];
                        generate_thumb(UPLOAD_PATH . "images/", UPLOAD_PATH . "images/", $image['file_name'],100);
                        if (isset($content_row['match_image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['match_image'.$i]);
                    }
                }
            }       

            $data = serialize(array_merge($content_row,$vals));
            //$data = serialize($vals);
            $this->master->save($this->table_name,array('code'=>$data),'ckey','home');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/home");
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'home'));
        $this->data['row'] =unserialize($this->data['row']->code);
        // pr($this->data['row']);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function login() {
        $this->data['enable_editor'] = FALSE;
        $this->data['pageView'] = ADMIN . '/site_login';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'login'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row=array();
            if (isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != "") {
                $image = upload_file(UPLOAD_PATH.'images/', 'image');
                if (!empty($image['file_name'])) {
                    if(isset($content_row['image']))
                        $this->remove_file(UPLOAD_PATH."images/".$content_row['image']);
                    $vals['image'] = $image['file_name'];
                } else {
                    setMsg('error', 'Please upload a valid image file >> ' . strip_tags($image['error']));
                    redirect(ADMIN . '/sitecontent/login', 'refresh');
                    exit;
                }
            }

            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code'=>$data),'ckey','login');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/login");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'login'));
        $this->data['row'] =unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function player_signup() 
    {
        $this->data['enable_editor'] = FALSE;
        $this->data['pageView'] = ADMIN . '/site_player_signup';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'player_signup'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row=array();
            if (isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != "") {
                $image = upload_file(UPLOAD_PATH.'images/', 'image');
                if (!empty($image['file_name'])) {
                    if(isset($content_row['image']))
                        $this->remove_file(UPLOAD_PATH."images/".$content_row['image']);
                    $vals['image'] = $image['file_name'];
                } else {
                    setMsg('error', 'Please upload a valid image file >> ' . strip_tags($image['error']));
                    redirect(ADMIN . '/sitecontent/player-signup', 'refresh');
                    exit;
                }
            }

            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code'=>$data),'ckey','player_signup');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/player-signup");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'player_signup'));
        $this->data['row'] =unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function signup() {
        $this->data['enable_editor'] = FALSE;
        $this->data['pageView'] = ADMIN . '/site_signup';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'signup'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row=array();
            if (isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != "") {
                $image = upload_file(UPLOAD_PATH.'images/', 'image');
                if (!empty($image['file_name'])) {
                    if(isset($content_row['image']))
                        $this->remove_file(UPLOAD_PATH."images/".$content_row['image']);
                    $vals['image'] = $image['file_name'];
                } else {
                    setMsg('error', 'Please upload a valid image file >> ' . strip_tags($image['error']));
                    redirect(ADMIN . '/sitecontent/signup', 'refresh');
                    exit;
                }
            }
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code'=>$data),'ckey','signup');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/signup");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'signup'));
        $this->data['row'] =unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function signup_model() {
        $this->data['enable_editor'] = FALSE;
        $this->data['pageView'] = ADMIN . '/site_signup_model';
        if ($vals = $this->input->post()) 
        {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'signup_model'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row=array();

            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code'=>$data),'ckey','signup_model');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/signup_model");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'signup_model'));
        $this->data['row'] =unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function forgot() {
        $this->data['enable_editor'] = FALSE;
        $this->data['pageView'] = ADMIN . '/site_forgot';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'forgot'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row=array();
            if (isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != "") {
                $image = upload_file(UPLOAD_PATH.'images/', 'image');
                if (!empty($image['file_name'])) {
                    if(isset($content_row['image']))
                        $this->remove_file(UPLOAD_PATH."images/".$content_row['image']);
                    $vals['image'] = $image['file_name'];
                } else {
                    setMsg('error', 'Please upload a valid image file >> ' . strip_tags($image['error']));
                    redirect(ADMIN . '/sitecontent/forgot', 'refresh');
                    exit;
                }
            }
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code'=>$data),'ckey','forgot');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/forgot");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'forgot'));
        $this->data['row'] =unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function reset() {
        $this->data['enable_editor'] = FALSE;
        $this->data['pageView'] = ADMIN . '/site_reset';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'reset'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row=array();
            if (isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != "") {
                $image = upload_file(UPLOAD_PATH.'images/', 'image');
                if (!empty($image['file_name'])) {
                    if(isset($content_row['image']))
                        $this->remove_file(UPLOAD_PATH."images/".$content_row['image']);
                    $vals['image'] = $image['file_name'];
                } else {
                    setMsg('error', 'Please upload a valid image file >> ' . strip_tags($image['error']));
                    redirect(ADMIN . '/sitecontent/reset', 'refresh');
                    exit;
                }
            }
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code'=>$data),'ckey','reset');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/reset");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'reset'));
        $this->data['row'] =unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function become_cosplayer() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_become_cosplayer';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'become_cosplayer'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row=array();
            /*if (isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != "") {
                if(isset($content_row['image']))
                    $this->remove_file(UPLOAD_PATH."images/".$content_row['image']);
                $image = upload_file(UPLOAD_PATH.'images/', 'image');
                $vals['image'] = $image1['file_name'];
            }*/
            for($i=1;$i<=2;$i++){
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            for($i=1;$i<=3;$i++){
                if (isset($_FILES["how_image".$i]["name"]) && $_FILES["how_image".$i]["name"] != "") {
                    $image = upload_file(UPLOAD_PATH.'images/', 'how_image'.$i);
                    if(!empty($image['file_name'])){
                        if (isset($content_row['how_image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['how_image'.$i]);
                        $vals['how_image'.$i] = $image['file_name'];
                    }
                }
            }
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code'=>$data),'ckey','become_cosplayer');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/become_cosplayer");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'become_cosplayer'));
        $this->data['row'] =unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function services() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_services';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'services'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row=array();
            /*if (isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != "") {
                if(isset($content_row['image']))
                    $this->remove_file(UPLOAD_PATH."images/".$content_row['image']);
                $image = upload_file(UPLOAD_PATH.'images/', 'image');
                $vals['image'] = $image1['file_name'];
            }*/
            for($i=1;$i<=2;$i++){
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            for($i=1;$i<=3;$i++){
                if (isset($_FILES["how_image".$i]["name"]) && $_FILES["how_image".$i]["name"] != "") {
                    $image = upload_file(UPLOAD_PATH.'images/', 'how_image'.$i);
                    if(!empty($image['file_name'])){
                        if (isset($content_row['how_image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['how_image'.$i]);
                        $vals['how_image'.$i] = $image['file_name'];
                    }
                }
            }
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code'=>$data),'ckey','services');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/services");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'services'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function player_guidelines() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_player_guidelines';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'player_guidelines'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row=array();
            for($i=1;$i<=2;$i++){
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code' => $data), 'ckey', 'player_guidelines');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/player_guidelines");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'player_guidelines'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function about() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_about';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'about'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row=array();
            if (isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != "") {
                $image = upload_file(UPLOAD_PATH.'pages/about-us', 'image');
                if (!empty($image['file_name']))
                {
                    if(isset($content_row['image']))
                        $this->remove_file(UPLOAD_PATH."pages/about-us/".$content_row['image']);
                    $vals['image'] = $image['file_name'];
                }
                else
                {
                    setMsg('error', 'Please upload a valid image file >> ' . strip_tags($image['error']));
                    redirect(ADMIN . '/sitecontent/login', 'refresh');
                    exit;
                }
            }
            for($i=1;$i<=4;$i++){
                if (isset($_FILES["second_image".$i]["name"]) && $_FILES["second_image".$i]["name"] != "") {
                    $image = upload_file(UPLOAD_PATH.'pages/about-us', 'second_image'.$i);
                    if(!empty($image['file_name'])){
                        if (isset($content_row['second_image'.$i]))
                            $this->remove_file(UPLOAD_PATH."pages/about-us/".$content_row['second_image'.$i]);
                        $vals['second_image'.$i] = $image['file_name'];
                    }
                }
            }
            for($i=1;$i<=3;$i++){
                if (isset($_FILES["third_image".$i]["name"]) && $_FILES["third_image".$i]["name"] != "") {
                    $image = upload_file(UPLOAD_PATH.'pages/about-us', 'third_image'.$i);
                    if(!empty($image['file_name'])){
                        if (isset($content_row['third_image'.$i]))
                            $this->remove_file(UPLOAD_PATH."pages/about-us/".$content_row['third_image'.$i]);
                        $vals['third_image'.$i] = $image['file_name'];
                    }
                }
            }
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code'=>$data),'ckey','about');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/about");
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'about'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function become_a_model() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_become_model';
        if ($vals = $this->input->post()) 
        {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'become_a_model'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row=array();
            if (isset($_FILES["banner"]["name"]) && $_FILES["banner"]["name"] != "") {
                $image = upload_file(UPLOAD_PATH.'pages/become-model', 'banner');
                if (!empty($image['file_name']))
                {
                    if(isset($content_row['banner']))
                        $this->remove_file(UPLOAD_PATH."pages/become-model/".$content_row['banner']);
                    $vals['banner'] = $image['file_name'];
                }
                else
                {
                    setMsg('error', 'Please upload a valid image file >> ' . strip_tags($image['error']));
                    redirect(ADMIN . '/sitecontent/become_a_model', 'refresh');
                    exit;
                }
            }

            for($i=1;$i<=3;$i++)
            {
                if (isset($_FILES["second_image".$i]["name"]) && $_FILES["second_image".$i]["name"] != "") {
                    $image = upload_file(UPLOAD_PATH.'pages/become-model', 'second_image'.$i);
                    if(!empty($image['file_name'])){
                        if (isset($content_row['second_image'.$i]))
                            $this->remove_file(UPLOAD_PATH."pages/become-model/".$content_row['second_image'.$i]);
                        $vals['second_image'.$i] = $image['file_name'];
                    }
                }
            }

            for($i=1;$i<=1;$i++){
                if (isset($_FILES["third_image".$i]["name"]) && $_FILES["third_image".$i]["name"] != "") {
                    $image = upload_file(UPLOAD_PATH.'pages/become-model', 'third_image'.$i);
                    if(!empty($image['file_name'])){
                        if (isset($content_row['third_image'.$i]))
                            $this->remove_file(UPLOAD_PATH."pages/become-model/".$content_row['third_image'.$i]);
                        $vals['third_image'.$i] = $image['file_name'];
                    }
                }
            }
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code'=>$data),'ckey','become_a_model');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/become_a_model");
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'become_a_model'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function how_it_works() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_how_it_works';
        if ($vals = $this->input->post()) 
        {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'how_it_works'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row=array();
            if (isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != "")
            {
                $image = upload_file(UPLOAD_PATH.'pages/how-it-works', 'image');
                if (!empty($image['file_name']))
                {
                    if(isset($content_row['image']))
                        $this->remove_file(UPLOAD_PATH."pages/how-it-works/".$content_row['image']);
                    $vals['image'] = $image['file_name'];
                }
                else
                {
                    setMsg('error', 'Please upload a valid image file >> ' . strip_tags($image['error']));
                    redirect(ADMIN . '/sitecontent/how_it_works', 'refresh');
                    exit;
                }
            }

            for($i=1;$i<=6;$i++)
            {
                if (isset($_FILES["second_image".$i]["name"]) && $_FILES["second_image".$i]["name"] != "") {
                    $image = upload_file(UPLOAD_PATH.'pages/how-it-works', 'second_image'.$i);
                    if(!empty($image['file_name'])){
                        if (isset($content_row['second_image'.$i]))
                            $this->remove_file(UPLOAD_PATH."pages/how-it-works/".$content_row['second_image'.$i]);
                        $vals['second_image'.$i] = $image['file_name'];
                    }
                }
            }
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code'=>$data),'ckey','how_it_works');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/how_it_works");
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'how_it_works'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function email_verify() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_email_verify';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'email_verify'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row=array();
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code'=>$data),'ckey','email_verify');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/email_verify");
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'email_verify'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function phone_verify() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_phone_verify';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'phone_verify'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row=array();
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code'=>$data),'ckey','phone_verify');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/phone_verify");
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'phone_verify'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function contact() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_contact';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'contact'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row=array();
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code'=>$data),'ckey','contact');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/contact");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'contact'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function safety() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_safety';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'safety'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row=array();

            for($i=1;$i<=1;$i++){
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            for($i=1;$i<=4;$i++){
                if (isset($_FILES["second_image".$i]["name"]) && $_FILES["second_image".$i]["name"] != "") {
                    $image = upload_file(UPLOAD_PATH.'images/', 'second_image'.$i);
                    if(!empty($image['file_name'])){
                        if (isset($content_row['second_image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['second_image'.$i]);
                        $vals['second_image'.$i] = $image['file_name'];
                    }
                }
            }
            for($i=1;$i<=4;$i++){
                if (isset($_FILES["third_image".$i]["name"]) && $_FILES["third_image".$i]["name"] != "") {
                    $image = upload_file(UPLOAD_PATH.'images/', 'third_image'.$i);
                    if(!empty($image['file_name'])){
                        if (isset($content_row['third_image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['third_image'.$i]);
                        $vals['third_image'.$i] = $image['file_name'];
                    }
                }
            }
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code'=>$data),'ckey','safety');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/safety");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'safety'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function advertise() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_advertise';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'advertise'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row=array();

            for($i=1;$i<=2;$i++){
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }
            /*
            for($i=1;$i<=3;$i++){
                if (isset($_FILES["third_image".$i]["name"]) && $_FILES["third_image".$i]["name"] != "") {
                    $image = upload_file(UPLOAD_PATH.'images/', 'third_image'.$i);
                    if(!empty($image['file_name'])){
                        if (isset($content_row['third_image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['third_image'.$i]);
                        $vals['third_image'.$i] = $image['file_name'];
                    }
                }
            }
            */
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code'=>$data),'ckey','advertise');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/advertise");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'advertise'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function privacy_policy() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_privacy_policy';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'privacy_policy'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row=array();
            unset($vals['detail']);
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code' => $data, 'full_code' => $this->input->post('detail')),'ckey','privacy_policy');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/privacy_policy");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'privacy_policy'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function terms_conditions() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_terms_conditions';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'terms_conditions'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row=array();
            unset($vals['detail']);
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code' => $data, 'full_code' => $this->input->post('detail')),'ckey','terms_conditions');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/terms_conditions");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'terms_conditions'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function cookie_policy() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_cookie_policy';
        if ($vals = $this->input->post())
        {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'cookie_policy'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row=array();
            unset($vals['detail']);
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code' => $data, 'full_code' => $this->input->post('detail')),'ckey','cookie_policy');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/cookie_policy");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'cookie_policy'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function disclaimers() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_disclaimers';
        if ($vals = $this->input->post())
        {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'disclaimers'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row=array();
            unset($vals['detail']);
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code' => $data, 'full_code' => $this->input->post('detail')),'ckey','disclaimers');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/disclaimers");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'disclaimers'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function guarantee() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_guarantee';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'guarantee'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row=array();
            unset($vals['detail']);
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code' => $data, 'full_code' => $this->input->post('detail')),'ckey','guarantee');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/guarantee");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'guarantee'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function reservation_protection() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_reservation_protection';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'reservation_protection'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row=array();
            unset($vals['detail']);
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code' => $data, 'full_code' => $this->input->post('detail')),'ckey','reservation_protection');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/reservation_protection");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'reservation_protection'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function player_resources() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_player_resources';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'player_resources'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row=array();
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code' => $data, 'full_code' => $this->input->post('detail')),'ckey','player_resources');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/player_resources");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'player_resources'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function blog() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_blog';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'blog'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row=array();
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code' => $data, 'full_code' => $this->input->post('detail')),'ckey','blog');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/blog");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'blog'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }
    function press() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_press';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'press'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row=array();
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code' => $data, 'full_code' => $this->input->post('detail')),'ckey','press');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/press");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'press'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function help() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_help';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'help'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row=array();
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code' => $data, 'full_code' => $this->input->post('detail')),'ckey','help');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/help");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'help'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function membership() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_membership';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'membership'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row=array();
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code' => $data, 'full_code' => $this->input->post('detail')),'ckey','membership');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/membership");
            exit;
        }

        $this->data['content'] = $this->master->getRow($this->table_name, array('ckey' => 'membership'));
        $this->data['row'] =unserialize($this->data['content']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function search() {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_search';
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'search'));
            $content_row = unserialize($content_row->code);
            if(!is_array($content_row))
                $content_row=array();
            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code'=>$data),'ckey','search');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/search");
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'search'));
        $this->data['row'] =unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function delete() {
        $arr = $this->input->post('delete');
        foreach ($arr as $key => $values) {
            $this->master->delete($this->table_name,'id', $values);
        }
        redirect("admin/sitecontent/slider", 'refresh');
    }

    function remove_file($filepath) {
        if (is_file($filepath)) {
            unlink($filepath);
        }
        return;
    }

    public function affiliates() 
    {
        $this->data['enable_editor'] = FALSE;
        $this->data['pageView'] = ADMIN . '/site_affiliates';
        $id = $this->uri->segment(4);
        if(isset($id))
        {
            $this->data['record'] = $this->master->getRow('affiliates_cards', ['id'=> $id]);
        }
        $this->data['id'] = $id;
        
        if ($vals = $this->input->post())
        {
            $content_row = $this->master->getRow($this->table_name, array('ckey'=>'affiliates'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row=array();
            if (isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != "") {
                $image = upload_file(UPLOAD_PATH.'images/', 'image');
                if (!empty($image['file_name'])) {
                    if(isset($content_row['image']))
                        $this->remove_file(UPLOAD_PATH."images/".$content_row['image']);
                    $vals['image'] = $image['file_name'];
                } else {
                    setMsg('error', 'Please upload a valid image file >> ' . strip_tags($image['error']));
                    redirect(ADMIN . '/sitecontent/affiliates', 'refresh');
                    exit;
                }
            }

            $data = serialize(array_merge($content_row,$vals));
            $this->master->save($this->table_name,array('code'=>$data),'ckey','affiliates');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/affiliates");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'affiliates'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->data['cards'] = $this->master->getRows('affiliates_cards');
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function save_affiliate()
    {
        if ($vals = $this->input->post())
        {
            $id = $this->input->post('id');
            if (isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != "")
            {
                $image = upload_file(UPLOAD_PATH.'pages/affiliates', 'image');
                if (!empty($image['file_name'])) 
                {
                    $vals['image'] = $image['file_name'];
                }
                else
                {
                    setMsg('error', 'Please upload a valid image file >> ' . strip_tags($image['error']));
                    redirect(ADMIN . '/sitecontent/affiliates', 'refresh');
                    exit;
                }
            }

            if($id != '')
            {
                if(isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != "")
                {
                    $data = 
                    [
                        'image' => $vals['image'],
                        'heading' => $vals['first_heading'],
                        'description'  => $vals['first_detail']
                    ];
                }
                else
                {
                    $data = 
                    [
                        'heading' => $vals['first_heading'],
                        'description'  => $vals['first_detail']
                    ];
                }
            }
            else
            {
                $data = 
                [
                    'image' => $vals['image'],
                    'heading' => $vals['first_heading'],
                    'description'  => $vals['first_detail']
                ];
            }


            $this->master->save('affiliates_cards', $data, 'id', $id);
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/affiliates");
            exit;
        }
    }

}
?>