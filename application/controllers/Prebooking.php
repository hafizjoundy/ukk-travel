<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prebooking extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_Booking');
	}
	public function index()
	{
		$rute_id = $this->input->get('rute_id');
		$passengers = $this->input->get('passengers');
		$data_rute = $this->M_Booking->get_rute($rute_id);

		if(count($data_rute) > 0){ //check if rute exsist
			$data_rute_price = $data_rute[0]['price'];
			$total_payment = $data_rute_price * $passengers;

			// var_dump($data_rute);

			$data['data'] = [ //data array
				'data_rute' => $data_rute[0], //data rute from array 0
				'total_payment' => $total_payment //total payment
			];

			$this->load->view('template/V_Header');
			$this->load->view('v_prebooking', $data);
			$this->load->view('template/V_Footer');
		}
		else{
			redirect(base_url());
		}

	}

	public function makebooking(){
		if($this->input->post('current_url')){
			$rand = md5(rand(1,999999999999));;
			$this->session->set_userdata($rand,$this->input->post('current_url'));
		}

		if($this->session->userdata('user') == false){
			redirect(base_url().'account/signin?url='.$rand);
		}

		$passengers = $this->input->post('passengers');
		$rute_id = $this->input->post('rute_id');

		$session_name = 'JON-'.md5(rand(1,999999999999)); //make rand session name
		
		$value = [ //insert some variable into session
			'passengers' => $passengers, 
			'rute_id' => $rute_id
		];

		$this->session->set_userdata($session_name,$value);

		redirect(base_url().'booking/?key='.$session_name);
	}
}
