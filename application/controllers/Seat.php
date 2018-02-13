<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seat extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_booking');
	}

	public function index()
	{
		$id_customer = $this->session->flashdata('id_customer');
		
		foreach ($id_customer as $value) {
			$customer[] = $this->M_booking->get_customer($value)[0]['name'];
		}

		$data['data'] = $customer;

		$this->load->view('template/v_header');
		$this->load->view('V_seat',$data);
		$this->load->view('template/v_footer');

	}
}
