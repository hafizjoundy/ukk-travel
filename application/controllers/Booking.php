<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_booking');
	}

	public function index()
	{

		$session_key = $this->input->get('key');
		$data['data'] = $this->session->userdata($session_key);

		$this->load->view('template/v_header');
		$this->load->view('v_booking', $data);
		$this->load->view('template/v_footer');
	}

	public function insert_customer()
	{
		$key = $this->input->post('key');
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$nomor = $this->input->post('nomor');
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');

		$form_len = count($name);

		for ($i = 0; $i < $form_len; $i++) {
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

		$value = $this->session->userdata($key);

		$value['id_customer'] = $id_customer; //add id_customer to session :3
		$this->session->set_userdata($key,$value);		

		redirect(base_url() . 'booking/seat/?key='.$key);
	}

	public function seat()
	{
		$data_customer = $this->session->userdata($_GET['key']);
		$id_customer = $data_customer['id_customer'];

		foreach ($id_customer as $value) {
			$customer[] = $this->M_booking->get_customer($value)[0]['name'];
		}

		$data['data'] = $customer;

		$this->load->view('template/v_header');
		$this->load->view('V_seat', $data);
		$this->load->view('template/v_footer');
	}

	public function proccess(){
		$key = $this->input->post('key');
		$customer_seat = $this->input->post('seat');

		$data_customer = $this->session->userdata($key);
		
		var_dump($data_customer);
		die;

		$id_customer = $data_customer['id_customer'];
		
		if(count($id_customer) == count($customer_seat)){
			for ($i=0; $i < count($id_customer); $i++) { 
				$passengers[] = [$id_customer[$i],$customer_seat[$i]];
			}
		}
		var_dump($passengers);
	}
}
