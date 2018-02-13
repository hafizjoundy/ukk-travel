<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_booking');
	}

	public function index()
	{
		$passengers = $this->input->get('passengers');
		$rute_id = $this->input->get('rute_id');

		$this->load->view('template/v_header');
		$this->load->view('v_booking');
		$this->load->view('template/v_footer');
	}

	public function insert_customer(){
		$name = $this->input->post('name');
        $address = $this->input->post('address');
        $nomor = $this->input->post('nomor');
        $email = $this->input->post('email');
		$gender = $this->input->post('gender');
		
		$form_len = count($name);
		
		for ($i=0; $i <$form_len ; $i++) { 
			$data = [
				'id' => '',
				'name' => $name[$i],
				'address' => $name[$i],
				'phone' => $nomor[$i],
				'email' => $email[$i],
				'gender' => $gender[$i]
			];
			$id_customer[] = $this->M_booking->insert_customer($data);
		}
		var_dump($id_customer);
	}
}
