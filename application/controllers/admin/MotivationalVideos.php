<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class MotivationalVideos extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->isLogged();
        has_access(6);
        $this->load->model('mvideo_model');
        $this->load->model('blog_model');
    }

    public function index()
    {
        $this->data['enable_datatable'] = TRUE;
        $this->data['pageView'] = ADMIN . '/motivational_videos/index';
        
        $this->data['rows'] = $this->mvideo_model->get_rows();
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function manage()
    {

        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/motivational_videos/index';

        if ($this->input->post())
        {
            $vals = $this->input->post();
            if (($_FILES["image"]["name"] != "")) 
            {
                $image = upload_file(UPLOAD_PATH . "motivational-videos", 'image');
                if (!empty($image['file_name'])) 
                {
                    $this->remove_file($this->uri->segment(4), 'image');
                    $vals['thumb'] = $image['file_name'];
                    generate_thumb(UPLOAD_PATH . "motivational-videos", UPLOAD_PATH . "motivational-videos", $image['file_name'],100,'thumb_');
                    generate_thumb(UPLOAD_PATH . "motivational-videos", UPLOAD_PATH . "motivational-videos", $image['file_name'],300,'300p_');
                }
                else
                {
                    setMsg('error', 'Please upload a valid image file >> ' . strip_tags($image['error']));
                    redirect(ADMIN . '/motivational_videos/manage/' . $this->uri->segment(4), 'refresh');
                    exit;
                }
            }
            $for_embed = explode('?v=', $vals['youtube_string']);
            $vals['for_embed'] = $for_embed[1];
            $vals['youtube_string'] = $vals['youtube_string'];
            $this->mvideo_model->save($vals, $this->uri->segment(4));
            setMsg('success', 'Blog Article has been saved successfully.');
            redirect(ADMIN . '/motivationalvideos', 'refresh');
            exit;
        }


        $this->data['row'] = $this->mvideo_model->get_row($this->uri->segment('4'));

        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    function delete($id)
    {
        $id = intval($id);
        $this->remove_file($id);
        $this->mvideo_model->delete($id);
        setMsg('success', 'Video has been deleted successfully.');
        redirect(ADMIN . '/motivationalvideos', 'refresh');
        exit;
    }

    private function remove_file($id, $type = '')
    {
        $arr = $this->mvideo_model->get_row($id);

        $filepath = UPLOAD_PATH . "/motivational-videos" . $arr->image;
        $filepath_thumb = UPLOAD_PATH . "/motivational-videosthumb_" . $arr->image;
        $filepath_300p = UPLOAD_PATH . "/motivational-videos300p_" . $arr->image;
        if (is_file($filepath)) {
            unlink($filepath);
        }
        if (is_file($filepath_thumb))
            unlink($filepath_thumb);
        if (is_file($filepath_300p))
            unlink($filepath_300p);
        return;
    }

}

?>