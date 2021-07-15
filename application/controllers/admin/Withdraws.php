<?php

class Withdraws extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->isLogged();
        $this->load->model('withdraw_model');
    }

    public function index() 
    {
        $this->data['enable_datatable'] = TRUE;
        $this->data['pageView'] = ADMIN . '/withdraw-requests';
        $this->data['rows'] = $this->withdraw_model->get_rows(['status'=> 'completed'], '', '', 'desc', 'id');
        $this->data['page_tittle'] = 'Manage Withdrawals';
        $this->load->view(ADMIN.'/includes/siteMaster', $this->data);
    }

    public function requests() {
        $this->data['enable_datatable'] = TRUE;
        $this->data['pageView'] = ADMIN . '/withdraw-requests';
        $this->data['rows'] = $this->withdraw_model->get_rows(['status'=> 'pending'], '', '', 'desc', 'id');
        $this->data['page_tittle'] = 'Manage Withdrawal Rrequests';
        $this->load->view(ADMIN.'/includes/siteMaster', $this->data);
    }
    function detail($id=0) {
        $id = intval($id);
        if($this->data['row'] = $this->withdraw_model->get_row($id))
        {
            $this->data['with_trxs']= $this->withdraw_model->get_withdrawal_detail($id);
            $this->data['pageView'] = ADMIN.'/withdraw-requests';
            $this->data['member']   = $this->master->getRow('users',array('user_id'=>$this->data['row']->mem_id));
            // $this->data['bank_row'] = $this->payment_methods_model->get_mem_method($this->data['row']->payment_method_id, $this->data['row']->mem_id);
            $this->data['bank_row'] = array();

            $this->load->view(ADMIN.'/includes/siteMaster', $this->data);
        }
        else
            show_404();
    }

    function mark_paid($id = 0) 
    {
        $id = intval($id);
        if($row = $this->withdraw_model->get_row_where(['id'=> $id, 'status'=> 'pending']))
        {
            $save_data = array('status'=>'completed', 'paid_date'=>date('Y-m-d h:i:s'));
            // $bank = intval($this->input->post('bank'));

            // if ($bank<1 || !$this->payment_methods_model->get_mem_method($bank,$row->mem_id)) {
            //     setMsg('error', 'Bank not belongs to that tutor!');
            //     redirect(ADMIN . '/withdraws/detail/'.$id, 'refresh');
            //     exit;
            // }

            // $save_data['payment_method_id']=$bank;

            $withdraw_transactions = $this->master->getRows('withdrawal_detail', ['withdraw_id'=> $id]);
            $is_completed = $this->withdraw_model->save($save_data,$id);
            if($is_completed)
            {
                foreach($withdraw_transactions as $key => $row):
                    # Change AVailable to Requested AFTER INSERT
                    $update_status = $this->master->save('earnings', ['status'=> 'paid'], 'id', $row->earning_id);
                endforeach;
            }

            setMsg('success', 'Withdraw request has been completed successfully.');
            redirect(ADMIN . '/withdraws/detail/'.$id, 'refresh');
            exit;
        }
        else
            show_404();
    }
}

?>