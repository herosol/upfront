<?php

class Dashboard extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->isLogged();
    }
    
    public function index()
    {
        $this->data['pageView'] = ADMIN."/dashboard";
        $this->data['dashboard'] = "1";
        $this->data['total_buyers'] = 0;
        $this->data['total_players'] = 0;

        $this->load->view(ADMIN.'/includes/siteMaster', $this->data);
    }
    
}

?>  