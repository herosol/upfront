<?php

class Topics extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('topic_model');
        $this->load->model('tcategory_model');
	}

	function index($cat_id = 0)
	{

		$cat_id = intval($cat_id);
		$condition = array();
		if ($cat_id>0)
		{
			$cat_row = $this->topic_model->get_rows(array('id' => $cat_id), '', '', 'desc');
			$condition['cat_id'] = $cat_id;
			if (!$cat_row)
			{
				show_404();
				exit;
			}
		}
		
		$this->data['rows']         = $this->topic_model->get_rows($condition, '', 6, 'asc');
		$this->data['recent_blogs'] = $this->topic_model->get_rows(array(), '', 9, 'desc');
		$this->data['content_row']  = $this->master->getRow('sitecontent', array('ckey' => 'blog'));
		$this->data['site_content'] = unserialize($this->data['content_row']->code);
		$this->load->view("pages/support", $this->data);
	}

	function detail($id)
	{
		$id = intval($id);
		if($this->data['row'] = $this->topic_model->get_row($id)) 
		{
			$this->data['site_content']['page_title'] = $this->data['row']->title;
            $this->data['site_content']['meta_description'] = $this->data['row']->meta_description;
            $this->data['site_content']['meta_keywords'] = $this->data['row']->meta_keywords;
            $this->data['site_content']['meta_image'] = get_site_image_src("blog",$this->data['row']->image);

			$this->data['recent_blogs'] = $this->topic_model->get_rows(array(), '', 6, 'desc');
			$this->load->view('pages/blog-detail', $this->data);
		}
		else
			show_404();
	}

}
?>