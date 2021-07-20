<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class HomeCruds extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->isLogged();
        has_access(6);
        $this->load->model('homec_model');
    }


    function index()
    {
        $this->data['enable_datatable'] = TRUE;
        $this->data['title'] = 'Fascinates';
        $this->data['pageView'] = ADMIN . '/home-cruds/site_home_cruds';
        
        $this->data['rows'] = $this->homec_model->get_rows(['section_type'=> 'fascinates']);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function star_viewing()
    {
        $this->data['enable_datatable'] = TRUE;
        $this->data['title'] = 'Star Viewing';
        $this->data['pageView'] = ADMIN . '/home-cruds/site_home_cruds';
        
        $this->data['rows'] = $this->homec_model->get_rows(['section_type'=> 'star_viewing']);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function manage_crud()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/home-cruds/site_home_cruds';
        if ($this->input->post())
        {
            $vals = $this->input->post();
            if (isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != "")
            {
                $image = upload_file(UPLOAD_PATH.'home-cruds', 'image');
                if (!empty($image['file_name']))
                {
                    // if(isset($content_row['image']))
                    //     $this->remove_file(UPLOAD_PATH."pages/home/".$content_row['image']);
                    $vals['image'] = $image['file_name'];
                }
                else
                {
                    setMsg('error', 'Please upload a valid image file >> ' . strip_tags($image['error']));
                    redirect(ADMIN . '/model_categories/manage_mcat', 'refresh');
                    exit;
                }
            }

            $this->homec_model->save($vals, $this->uri->segment(4));
            setMsg('success', 'Model category has been saved successfully.');
            if($vals['section_type'] == 'fascinates')
                redirect(ADMIN . '/homecruds', 'refresh');
            else
                redirect(ADMIN . '/homecruds/star_viewing', 'refresh');
                
            exit;
        }

        $this->data['row'] = $this->homec_model->get_row($this->uri->segment('4'));
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function delete_crud($id)
    {
        $id = intval($id);
        $row = $this->homec_model->get_row($id);
        $this->homec_model->delete($id);
        setMsg('success', 'Home content has been deleted successfully.');
        if($row->section_type == 'fascinates')
        {
            redirect(ADMIN . '/homecruds', 'refresh');   
        }
        else
        {
            redirect(ADMIN . '/homecruds/star_viewing', 'refresh');   
        }
        exit;
    }
}

?>