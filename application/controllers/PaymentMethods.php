<?php

class PaymentMethods extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
        $this->isMemLogged($this->session->user_type);
        $this->load->view('artist/payment-method');
	}

}
?>