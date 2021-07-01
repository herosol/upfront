<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Model_applications extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->isLogged();
        has_access(6);
        $this->load->model('user_model');
    }

    public function index()
    {
        if(empty($this->session->userdata('model-applications-state')))
        {
            $this->session->set_userdata('model-applications-state', 'New');
        }
        $this->data['enable_datatable'] = TRUE;
        $this->data['pageView'] = ADMIN . '/model-applications/index';
        
        $this->data['applications'] = $this->user_model->get_rows(['user_type'=> 'model']);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function save_state()
    {
        if($this->input->post())
        {
            $val = html_escape($this->input->post('val'));
            $this->session->set_userdata('model-applications-state', $val);
            return json_encode(['status'=> 'success']);
        }
    }

    public function change_application_state($action, $user_id)
    {
        $user_id = html_escape($user_id);
        if($user_id > 0)
        {
            $row = $this->user_model->get_row($user_id, 'user_id');
            if($action)
            {
                $data = 
                [
                    'mem_model_application' => '1'
                ];
                $this->user_model->save($data, $user_id);
                $user_data    = array('name' => ucfirst($row->user_fname).' '.ucfirst($row->user_lname), "email" => $row->email);
                //$is_email_send = $this->send_site_email($user_data, 'model-application-approved');
                setMsg('success', 'Model Request Approved Successfully !');
            }
            else
            {
                $data = 
                [
                    'mem_model_application' => '2'
                ];
                $this->user_model->save($data, $user_id);
                $user_data    = array('name' => ucfirst($row->user_fname).' '.ucfirst($row->user_lname), "email" => $row->email);
                //$is_email_send = $this->send_site_email($user_data, 'model-application-cancelled');
                setMsg('success', 'Model Request Cancelled Successfully !');
            }

            $res['redirect_url'] = site_url('email-verification');
            redirect(ADMIN . "/model_applications");
        }
    }

    function delete($id)
    {
        $id = intval($id);
        $this->user_model->delete($id);
        setMsg('success', 'Model Application has been deleted successfully.');
        redirect(ADMIN . '/model_applications', 'refresh');
        exit;
    }

}

?>