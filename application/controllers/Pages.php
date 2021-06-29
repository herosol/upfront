<?php
class Pages extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mvideo_model');
    }

    public function become_model()
    {
        $this->data['content_row'] = $this->master->getRow('sitecontent', array('ckey' => 'become_a_model'));
        $this->data['site_content'] = unserialize($this->data['content_row']->code);
        return $this->load->view('pages/become-a-model', $this->data);
    }

    public function help()
    {
        return $this->load->view('pages/support');
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