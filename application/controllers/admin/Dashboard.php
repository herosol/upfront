<?php

class Dashboard extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->isLogged();
        $this->load->model('user_model');
    }
    
    public function index()
    {
        $this->data['pageView'] = ADMIN."/dashboard";
        $this->data['dashboard'] = "1";
        $this->data['total_users'] = $this->user_model->count_rows_where(['user_type'=> 'user', 'mem_verified'=> '1', 'user_status'=> '1']);
        $this->data['total_models'] = $this->user_model->count_rows_where(['user_type'=> 'model', 'mem_model_application'=> '1', 'mem_verified'=> '1', 'user_status'=> '1']);;

        $this->load->view(ADMIN.'/includes/siteMaster', $this->data);
    }
    
}

?>  