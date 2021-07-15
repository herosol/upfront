<?php

class Earnings extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('withdraw_model');  
	}

	function index()
	{
        $this->isMemLogged($this->session->user_type);
		$this->data['earningsPendings'] = $this->withdraw_model->get_earning_pending();
		$this->data['earnings']     = $this->withdraw_model->get_earning();
		$this->data['availBalance'] = $this->withdraw_model->get_avail_balance();
		$this->data['requested']    = $this->withdraw_model->get_requested_balance();
		$this->data['payouts']      = $this->withdraw_model->get_payouts();
		$this->data['deliveries']   = $this->withdraw_model->count_rows_where(['mem_id'=> $this->session->user_id, 'status'=> 'completed']);
		foreach($this->data['earningsPendings'] as $key => $value)
		{
			if(get_dates_days($value->date, date('Y-m-d H:i:s')) >= $this->data['site_settings']->site_hold_payment)
			{
				$this->master->save('earnings', ['status'=> 'available'], 'id', $value->id);
			}
		}
        $this->load->view('artist/earnings', $this->data);
	}

	function withdraw_request()
	{
		if($this->input->post())
		{
			$available_earning = $this->withdraw_model->get_earning_available();
			$availBalance      = $this->withdraw_model->get_avail_balance();
			if(count($available_earning) > 0)
			{
				$withdraw_data = 
					[
						'mem_id' => $this->session->user_id,
						'amount' => $availBalance
					];
				$withdraw_id = $this->withdraw_model->save($withdraw_data);
				if($withdraw_id)
				{
					foreach($available_earning as $key => $row):
						# INSERT into transaction details
						$trans_detail  = $this->master->save('withdrawal_detail', ['withdraw_id'=> $withdraw_id, 'earning_id'=> $row->id]);
						# Change AVailable to Requested AFTER INSERT
						$update_status = $this->master->save('earnings', ['status'=> 'requested'], 'id', $row->id);
					endforeach;

					setMsg('success', 'Transaction Success! Withdraw request has been sent to admin.');
					echo json_encode(['status'=> 'success']);
				}
				else
				{
					setMsg('error', 'Transaction Failed! Please Contact To Admin.');
					echo json_encode(['status'=> 'failed']);
				}
			}
			else
			{
				setMsg('Info', 'You don\'t have sufficient balance for this transaction.');
				echo json_encode(['status'=> 'failed']);
			}
		}
		else
		{
			setMsg('error', 'Transaction Failed! Please Contact To Admin.');
			echo json_encode(['status'=> 'failed']);
		}
	}

}
?>