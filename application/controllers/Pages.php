<?php
class Pages extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function become_model()
    {
        return $this->load->view('pages/become-a-model');
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

}