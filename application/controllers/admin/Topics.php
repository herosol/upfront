<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Topics extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->isLogged();
        has_access(6);
        $this->load->model('topic_model');
        $this->load->model('tcategory_model');
    }

    public function index()
    {
        $this->data['enable_datatable'] = TRUE;
        $this->data['pageView'] = ADMIN . '/topics/index';
        
        $this->data['rows'] = $this->topic_model->get_rows();
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function manage()
    {

        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/topics/index';

        if ($this->input->post()) 
        {
            $vals = $this->input->post();
            // $vals['date'] = dbFormatDate($vals['date']);
            $vals['slug'] = url_title($vals['title'], '-', TRUE);
            $this->topic_model->save($vals, $this->uri->segment(4));
            setMsg('success', 'Topic has been saved successfully.');
            redirect(ADMIN . '/topics', 'refresh');
            exit;
        }


        $this->data['row'] = $this->topic_model->get_row($this->uri->segment('4'));
        $this->data['categories'] = $this->tcategory_model->get_rows();

        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function delete($id)
    {
        $id = intval($id);
        $this->remove_file($id);
        $this->topic_model->delete($id);
        setMsg('success', 'Blog Article has been deleted successfully.');
        redirect(ADMIN . '/blog', 'refresh');
        exit;
    }

    private function remove_file($id, $type = '')
    {
        $arr = $this->topic_model->get_row($id);

        $filepath = UPLOAD_PATH . "/blog/" . $arr->image;
        $filepath_thumb = UPLOAD_PATH . "/blog/thumb_" . $arr->image;
        $filepath_300p = UPLOAD_PATH . "/blog/300p_" . $arr->image;
        if (is_file($filepath)) {
            unlink($filepath);
        }
        if (is_file($filepath_thumb))
            unlink($filepath_thumb);
        if (is_file($filepath_300p))
            unlink($filepath_300p);
        return;
    }

    /*** categories ***/

    function categories()
    {
        $this->data['enable_datatable'] = TRUE;
        $this->data['pageView'] = ADMIN . '/topics/categories';
        
        $this->data['rows'] = $this->tcategory_model->get_rows();
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function manage_category()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/topics/categories';
        if ($this->input->post())
        {
            $vals = $this->input->post();

            $this->tcategory_model->save($vals, $this->uri->segment(4));
            setMsg('success', 'Category has been saved successfully.');
            redirect(ADMIN . '/topics/categories', 'refresh');
            exit;
        }

        $this->data['row'] = $this->tcategory_model->get_row($this->uri->segment('4'));
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function delete_category($id)
    {
        $id = intval($id);
        if ($this->topic_model->get_row_where(array('cat_id' => $id)))
        {
            setMsg('error',"Category has related blog, It can't be deleted");
            redirect(ADMIN . '/topics/categories', 'refresh');
            exit;
        }
        $this->tcategory_model->delete($id);
        setMsg('success', 'Category has been deleted successfully.');
        redirect(ADMIN . '/topics/categories', 'refresh');
        exit;
    }
}

?>