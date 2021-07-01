<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Skills extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->isLogged();
        has_access(6);
        $this->load->model('skills_model');
    }

    /*** categories ***/

    function index()
    {
        $this->data['enable_datatable'] = TRUE;
        $this->data['pageView'] = ADMIN . '/skills/site_skills';
        
        $this->data['rows'] = $this->skills_model->get_rows();
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function manage_skills()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/skills/site_skills';
        if ($this->input->post())
        {
            $vals = $this->input->post();
            $this->skills_model->save($vals, $this->uri->segment(4));
            setMsg('success', 'Skill has been saved successfully.');
            redirect(ADMIN . '/skills', 'refresh');
            exit;
        }

        $this->data['row'] = $this->skills_model->get_row($this->uri->segment('4'));
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function delete_skill($id)
    {
        $id = intval($id);
        if ($this->skills_model->get_row_where(array('cat_id' => $id)))
        {
            setMsg('error',"Category has related blog, It can't be deleted");
            redirect(ADMIN . '/topics/categories', 'refresh');
            exit;
        }
        $this->skills_model->delete($id);
        setMsg('success', 'Category has been deleted successfully.');
        redirect(ADMIN . '/topics/categories', 'refresh');
        exit;
    }
}

?>