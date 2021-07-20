<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
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
