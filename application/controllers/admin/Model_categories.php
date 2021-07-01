<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Model_categories extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->isLogged();
        has_access(6);
        $this->load->model('mcategories_model');
    }


    function index()
    {
        $this->data['enable_datatable'] = TRUE;
        $this->data['pageView'] = ADMIN . '/model-categories/site_model_categories';
        
        $this->data['rows'] = $this->mcategories_model->get_rows();
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function manage_mcat()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/model-categories/site_model_categories';
        if ($this->input->post())
        {
            $vals = $this->input->post();
            $this->mcategories_model->save($vals, $this->uri->segment(4));
            setMsg('success', 'Model category has been saved successfully.');
            redirect(ADMIN . '/model_categories', 'refresh');
            exit;
        }

        $this->data['row'] = $this->mcategories_model->get_row($this->uri->segment('4'));
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function delete_skill($id)
    {
        $id = intval($id);
        if ($this->mcategories_model->get_row_where(array('cat_id' => $id)))
        {
            setMsg('error',"Category has related blog, It can't be deleted");
            redirect(ADMIN . '/topics/categories', 'refresh');
            exit;
        }
        $this->mcategories_model->delete($id);
        setMsg('success', 'Category has been deleted successfully.');
        redirect(ADMIN . '/topics/categories', 'refresh');
        exit;
    }
}

?>