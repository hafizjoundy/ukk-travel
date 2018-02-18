<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_booking');
	}

	public function index()
	{	
		
		$rute_all = $this->M_booking->get_all_rute();
		$data['rute_all'] = $rute_all;

		$this->load->view('template/v_header');
		$this->load->view('v_home',$data);
		$this->load->view('template/v_footer');
	}
}

