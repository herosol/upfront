<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Contacts extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->isLogged();
        has_access(6);
        $this->load->model('contact_model');
    }


    function index()
    {
        if(empty($this->session->userdata('contacts-state')))
        {
            $this->session->set_userdata('contacts-state', 'New');
        }
        $this->data['enable_datatable'] = TRUE;
        $this->data['pageView'] = ADMIN . '/contact/index';
        
        $this->data['rows'] = $this->contact_model->get_rows();
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function save_state()
    {
        if($this->input->post())
        {
            $val = html_escape($this->input->post('val'));
            $this->session->set_userdata('contacts-state', $val);
            return json_encode(['status'=> 'success']);
        }
    }

}

?>