<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('appearence_model');
    }

	public function clients()
	{
        $this->data['enable_datatable'] = TRUE;
        $this->data['pageView'] = ADMIN . '/members/index';
        $this->data['rows'] = $this->user_model->get_rows(array('user_type' => 'user'));
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
	}

	public function models()
	{
        $this->data['enable_datatable'] = TRUE;
        $this->data['pageView'] = ADMIN . '/members/models';
        $this->data['rows'] = $this->user_model->get_rows(array('user_type' => 'model'));
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
	}

    function manage()
    {
        $this->data['pageView'] = ADMIN . '/members/index';
        $this->data['row'] = $this->user_model->getMember($this->uri->segment('4'));
        if ($this->input->post()) 
        {
            $vals = $this->input->post();
            $vals['user_type'] = 'user';
            
            if($vals['user_pswd'] != '')
                $vals['user_pswd'] = doEncode($vals['user_pswd']);
            else
                unset($vals['user_pswd']);

            $this->user_model->save($vals, $this->uri->segment(4));
            setMsg('success', 'Client has been saved successfully.');
            redirect(ADMIN . '/members/manage/' . $this->uri->segment(4), 'refresh');
            exit;
        }
        
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function manage_model()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/members/models';
        $this->data['row'] = $this->user_model->getMember($this->uri->segment('4'));
        $this->data['appearence'] = $this->master->getRow('mem_appearance', ['mem_id' => $this->uri->segment('4')]);
        $this->data['mem_languages']  = $this->master->getRows('mem_languages', ['mem_id' => $this->uri->segment('4')]);
        $this->data['gallery_images'] = $this->master->getRows('mem_gallery_images', ['mem_id' => $this->uri->segment('4')]);
        if ($this->input->post()) 
        {
            $post = html_escape($this->input->post());
            $user_id = $this->uri->segment('4');
            $this->form_validation->set_message('integer', 'Please select a valid {field}');
            $this->form_validation->set_rules('user_fname', 'First Name', 'required|alpha');
            $this->form_validation->set_rules('user_lname', 'Last Name', 'required|alpha');
            $this->form_validation->set_rules('mem_phone', 'Phone', 'required');
            $this->form_validation->set_rules('mem_dob', 'Date of Birth', 'required');
            $this->form_validation->set_rules('mem_rate', 'Rate', 'required|numeric', array('numeric' => '{field} should be numeric'));
            $this->form_validation->set_rules('mem_about', 'Profile Bio', 'required');
            $this->form_validation->set_rules('mem_address1', 'Address', 'required');
            $this->form_validation->set_rules('mem_city', 'City or State', 'required');
            $this->form_validation->set_rules('mem_zip', 'Zip Code', 'required');
            $this->form_validation->set_rules('mem_country', 'Country', 'required|integer');
            $this->form_validation->set_rules('mem_state', 'State', 'required|integer');
            $this->form_validation->set_rules('mem_sex', 'Gender', 'required');
            $this->form_validation->set_rules('eye_color', 'Eye Color', 'required');
            $this->form_validation->set_rules('skin_color', 'Skin Color', 'required');
            $this->form_validation->set_rules('hair_color', 'Hair Color', 'required');
            $this->form_validation->set_rules('hair_length', 'Hair Length', 'required');
            $this->form_validation->set_rules('shoe_size', 'Shoe Size', 'required');
            $this->form_validation->set_rules('height', 'Height', 'required');
            $this->form_validation->set_rules('weight', 'Weight', 'required');
            $this->form_validation->set_rules('chest_bust', 'Chest / Bust', 'required');
            $this->form_validation->set_rules('cup', 'Cup', 'required');
            $this->form_validation->set_rules('waist', 'Waist', 'required');
            $this->form_validation->set_rules('hip_inseam', 'Hip / Inseam', 'required');
            $this->form_validation->set_rules('ethnicity', 'Ethnicity', 'required');
            $this->form_validation->set_rules('jacket_size', 'Jacket Size', 'required');
            $this->form_validation->set_rules('body_type', 'Body Type', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                setMsg('error', validation_errors());
                redirect(ADMIN . '/members/manage_model/' . $this->uri->segment(4));
            }


            $user_info =
            [
                'user_fname'   => trim($post['user_fname']),
                'user_lname'   => trim($post['user_lname']),
                'mem_phone'    => trim($post['mem_phone']),
                'mem_dob'      => db_format_date($post['mem_dob']),
                'mem_sex'      => $post['mem_sex'],
                'mem_country_id' => $post['mem_country'],
                'mem_state'      => $post['mem_state'],
                'mem_city'     => trim($post['mem_city']),
                'mem_zip'      => trim($post['mem_zip']),
                'mem_address1' => trim($post['mem_address1']),
                'mem_about'    => trim($post['mem_about']),
                'mem_rate'     => trim($post['mem_rate']),
                'mem_skills'   => trim($post['skills'])
            ];


            if (isset($_FILES["dp_image"]["name"]) && $_FILES["dp_image"]["name"] != "") {
                $image = upload_file(UPLOAD_PATH . 'members', 'dp_image');
                generate_thumb(UPLOAD_PATH . "members/", UPLOAD_PATH . "members/", $image['file_name'],100,'thumb_');
                generate_thumb(UPLOAD_PATH . "members/", UPLOAD_PATH . "members/", $image['file_name'],300,'300p_');
                $user_info['mem_image'] = $image['file_name'];
            }

            if (isset($_FILES["cover_photo"]["name"]) && $_FILES["cover_photo"]["name"] != "") {
                $image = upload_file(UPLOAD_PATH . 'members', 'cover_photo');
                generate_thumb(UPLOAD_PATH . "members/", UPLOAD_PATH . "members/", $image['file_name'],100,'thumb_');
                generate_thumb(UPLOAD_PATH . "members/", UPLOAD_PATH . "members/", $image['file_name'],300,'300p_');
                $user_info['mem_cover_image'] = $image['file_name'];
            }

            if (isset($_FILES["intro_video"]["name"]) && $_FILES["intro_video"]["name"] != "") {
                $image = upload_file(UPLOAD_PATH . 'members', 'intro_video', 'video');
                $user_info['mem_video'] = $image['file_name'];
            }

            if(!empty($post['mem_zip']))
            {
                $coordinates = get_location_detail(trim($post['mem_zip']));
                $user_info['mem_map_lat'] = $coordinates->Latitude;
                $user_info['mem_map_lng'] = $coordinates->Longitude;
            }

            $this->user_model->save($user_info, $user_id);

            # Gallery Images
            if (isset($_FILES['gallery_images']) && is_array($_FILES['gallery_images']['name'])) {
                $image_path = array();
                $count = count($_FILES['gallery_images']['name']);
                for ($key = 0; $key < $count; $key++) {
                    $_FILES['file' . $key]['name']     = $_FILES['gallery_images']['name'][$key];
                    $_FILES['file' . $key]['type']     = $_FILES['gallery_images']['type'][$key];
                    $_FILES['file' . $key]['tmp_name'] = $_FILES['gallery_images']['tmp_name'][$key];
                    $_FILES['file' . $key]['error']    = $_FILES['gallery_images']['error'][$key];
                    $_FILES['file' . $key]['size']     = $_FILES['gallery_images']['size'][$key];
                }

                for ($i = 0; $i < $count; $i++) {
                    if (isset($_FILES["file" . $i]["name"]) && $_FILES["file" . $i]["name"] != "") {
                        $image = upload_file(UPLOAD_PATH . 'members', 'file' . $i);
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

            # DELETED IMAGES
            if(!empty(trim($post['deleted_images'])))
            {
                foreach(explode(',', trim($post['deleted_images'])) as $key => $value)
                {
                    $this->master->delete_where('mem_gallery_images', ['id'=> $value]);
                }
            }

            # Model Languages
            $user_languages = [];
            $this->master->delete_where('mem_languages', ['mem_id' => $user_id]);
            foreach ($post['languages'] as $key => $value) :
                $user_languages =
                    [
                        'mem_id'         => $user_id,
                        'language_id'    => $value,
                        'language_level' => $post['language_level'][$key]
                    ];
                if (count($this->master->getRow('mem_languages', ['mem_id' => $user_id, 'language_id' => $value])) == '0') :
                    $this->master->save('mem_languages', $user_languages);
                endif;
            endforeach;

            $user_appearence =
                [
                    'eye_color'  => trim($post['eye_color']),
                    'skin_color' => trim($post['skin_color']),
                    'hair_color' => trim($post['hair_color']),
                    'weight'     => trim($post['weight']),
                    'chest_bust' => trim($post['chest_bust']),
                    'cup'        => trim($post['cup']),
                    'hair_length' => trim($post['hair_length']),
                    'shoe_size'  => trim($post['shoe_size']),
                    'height'     => trim($post['height']),
                    'waist'      => trim($post['waist']),
                    'hip_inseam' => trim($post['hip_inseam']),
                    'ethnicity'  => trim($post['ethnicity']),
                    'body_type'  => trim($post['body_type']),
                    'jacket_size'=> trim($post['jacket_size']),
                    'mem_id'     => $user_id
                ];

            if (count($this->appearence_model->is_exist(['mem_id' => $user_id])) > 0)
            {
                $this->appearence_model->update($user_appearence, ['mem_id' => $user_id]);
            }
            else
            {
                $this->appearence_model->save($user_appearence);
            }

            setMsg('success', 'Client has been saved successfully.');
            redirect(ADMIN . '/members/manage_model/' . $this->uri->segment(4), 'refresh');
            exit;
        }
        
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function active()
    {
        $user_id = $this->uri->segment(4);
        $vals['user_status'] = '1';
        $this->user_model->save($vals, $user_id);
        setMsg('success', 'Client has been activated successfully.');
        redirect(ADMIN . '/members/clients', 'refresh');
    }

    function active_model()
    {
        $user_id = $this->uri->segment(4);
        $vals['user_status'] = '1';
        $this->user_model->save($vals, $user_id);
        setMsg('success', 'Model has been activated successfully.');
        redirect(ADMIN . '/members/models', 'refresh');
    }

    function inactive()
    {
        $user_id = $this->uri->segment(4);
        $vals['user_status'] = '0';
        $this->user_model->save($vals, $user_id);
        setMsg('success', 'Client has been deactivated successfully.');
        redirect(ADMIN . '/members/clients', 'refresh');
    }

    function inactive_model()
    {
        $user_id = $this->uri->segment(4);
        $vals['user_status'] = '0';
        $this->user_model->save($vals, $user_id);
        setMsg('success', 'Model has been deactivated successfully.');
        redirect(ADMIN . '/members/models', 'refresh');
    }

    function delete()
    {
        has_access(10);
        //$this->remove_file($this->uri->segment(4));
        $this->user_model->delete($this->uri->segment('4'));
        setMsg('success', 'Client has been deleted successfully.');
        redirect(ADMIN . '/members/clients', 'refresh');
    }

    function delete_model()
    {
        has_access(10);
        //$this->remove_file($this->uri->segment(4));
        $this->user_model->delete($this->uri->segment('4'));
        setMsg('success', 'Model has been deleted successfully.');
        redirect(ADMIN . '/members/models', 'refresh');
    }

    function remove_file($id, $type = '')
    {
        $arr = $this->member_model->getMember($id);
        $filepath = UPLOAD_PATH . "/buyers/" . $arr->image;
        $filepath_thumb = UPLOAD_PATH . "/buyers/thumb_" . $arr->image;
        $filepath_ico = UPLOAD_PATH . "/buyers/ico_" . $arr->image;
        if (is_file($filepath)) {
            unlink($filepath);
        }
        if (is_file($filepath_thumb))
            unlink($filepath_thumb);
        if (is_file($filepath_ico))
            unlink($filepath_ico);
        return;
    }
}
