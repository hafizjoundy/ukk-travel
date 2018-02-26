<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('M_Booking');
	}

	public function index()
	{	
		$data['nav'] = 'dashboard';
		$this->load->view('admin/template/V_Header',$data);
		$this->load->view('admin/template/V_Footer');
	}
}

