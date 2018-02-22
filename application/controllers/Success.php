<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Success extends CI_Controller {
	public function index()
	{
		$data_customer = $this->session->userdata($_GET['key']);

		$this->session->unset_userdata($_GET['key']); //unset session customer;

		$reservation_code = $_GET['reservation_code'];
		echo $reservation_code;
		
		$this->load->view('template/V_Header');
		$this->load->view('V_Success',$data);
		$this->load->view('template/V_Footer');
	}
}