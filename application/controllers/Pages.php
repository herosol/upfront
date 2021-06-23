<?php
class Pages extends CI_Controller
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

}