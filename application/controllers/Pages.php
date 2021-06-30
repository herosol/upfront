<?php
class Pages extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mvideo_model');
		$this->load->model('topic_model');
        $this->load->model('tcategory_model');
    }

    public function become_model()
    {
        $this->data['content_row'] = $this->master->getRow('sitecontent', array('ckey' => 'become_a_model'));
        $this->data['site_content'] = unserialize($this->data['content_row']->code);
        return $this->load->view('pages/become-a-model', $this->data);
    }

    public function help()
    {
        $this->data['records'] = [];
        $this->data['categories'] = $cats = $this->tcategory_model->get_rows();
        foreach($cats as $cat)
        {
            $this->data['records'][] = 
            [
                'cat_name' => $cat->title,
                'topics' => $this->topic_model->get_rows(['cat_id'=> $cat->id])
            ];
        }

        return $this->load->view('pages/support', $this->data);
    }

	function topic_detail($id)
	{
		$id = intval($id);
		if($this->data['row'] = $this->topic_model->get_row($id)) 
		{
			$this->data['site_content']['page_title'] = $this->data['row']->title;
            $this->data['site_content']['meta_description'] = $this->data['row']->meta_description;
            $this->data['site_content']['meta_keywords'] = $this->data['row']->meta_keywords;

			$this->load->view('pages/topic-detail', $this->data);
		}
		else
			show_404();
	}
    
    function get_topic_search_suggestions()
    {
        if($this->input->post())
        {
            $string = html_escape($this->input->post('val'));
            $suggestions = $this->topic_model->search_titles($string);
            $html = '';
            if(count($suggestions) > 0)
            {
                foreach($suggestions as $row):
                    $html .= '<li data-value="'.$row->title.'"><em>'.$row->title.'</em></li>';
                endforeach;
            }
            else
            {
                $html .= '<li><em>Title like this not found.</em></li>';
            }
            echo json_encode(['status'=> 'success', 'html'=> $html]);
        }
        else
            return 0;
    }

    function get_topic_search()
    {
        if($this->input->post())
        {
            $string = html_escape($this->input->post('keyword'));
            $results = $this->topic_model->search_topics($string);
            $records = []; 
            foreach($results as $row)
            {
                $records[$row->cat_id]['cat_name'] = $row->cat_name;
                $records[$row->cat_id]['rows'][]  = $row;
            }

            $html = '';
            foreach($records as $topic):
                if(!empty($topic['rows'])):
                    $html .= '<div class="col">';
                    $html .= '<div class="inner">';
                    $html .= '<h5>'.$topic['cat_name'].'</h5>';
                    $html .= '<ul>';
                        foreach($topic['rows'] as $row):
                            $html .= '<li><a href="'.base_url().'topic-detail/'.$row->id.'">'.$row->title.'</a></li>';
                        endforeach;
                    $html .= '</ul></div></div>';
                endif; 
            endforeach;

            echo json_encode(['status'=> 'success', 'html'=> $html]);
        }
        else
            return 0;
    }

    function cookie_policy()
    {
        $this->data['content_row'] = $this->master->getRow('sitecontent', array('ckey' => 'cookie_policy'));
        $this->data['site_content'] =unserialize($this->data['content_row']->code);
        $this->load->view('pages/cookie-policy', $this->data);
    }

    function privacy_policy()
    {
        $this->data['content_row'] = $this->master->getRow('sitecontent', array('ckey' => 'privacy_policy'));
        $this->data['site_content'] = unserialize($this->data['content_row']->code);
        $this->load->view('pages/privacy-policy', $this->data);
    }

    function disclaimers()
    {
        $this->data['content_row'] = $this->master->getRow('sitecontent', array('ckey' => 'disclaimers'));
        $this->data['site_content'] = unserialize($this->data['content_row']->code);
        $this->load->view('pages/disclaimers', $this->data);
    }

    function affiliates()
    {
        $this->data['content_row'] = $this->master->getRow('sitecontent', array('ckey' => 'affiliates'));
        $this->data['site_content'] = unserialize($this->data['content_row']->code);
        $this->data['cards'] = $this->master->getRows('affiliates_cards');
        $this->load->view('pages/affiliates', $this->data);
    }

    function contact_us()
    {
        $this->data['content_row'] = $this->master->getRow('sitecontent', array('ckey' => 'contact'));
        $this->data['site_content'] = unserialize($this->data['content_row']->code);
        $this->load->view('pages/contact', $this->data);
    }

    function about_us()
    {
        $this->data['content_row'] = $this->master->getRow('sitecontent', array('ckey' => 'about'));
        $this->data['site_content'] = unserialize($this->data['content_row']->code);
        $this->load->view('pages/about', $this->data);
    }

    function how_it_works()
    {
        $this->data['content_row'] = $this->master->getRow('sitecontent', array('ckey' => 'how_it_works'));
        $this->data['site_content'] = unserialize($this->data['content_row']->code);
        $this->load->view('pages/how-it-works', $this->data);
    }

    function search()
    {
        $this->load->view('pages/search');
    }

    function educational_videos()
    {
        $this->data['rows'] = $this->mvideo_model->get_rows();
        $this->load->view('pages/educational-videos', $this->data);
    }

}