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
		$this->data['earnings'] = $this->withdraw_model->get_earning();
		$this->data['availBalance'] = $this->withdraw_model->get_avail_balance();
		foreach($this->data['earningsPendings'] as $key => $value)
		{
			if(get_dates_days($value->date, date('Y-m-d H:i:s')) >= 5)
			{
				$this->master->save('earnings', ['status'=> 'available'], 'id', $value->id);
			}
		}
        $this->load->view('artist/earnings', $this->data);
	}

}
?>