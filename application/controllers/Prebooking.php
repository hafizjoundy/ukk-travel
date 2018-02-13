<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prebooking extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_booking');
	}
	public function index()
	{
		$rute_id = $this->input->get('rute_id'); //get rute from method get
		$passengers = $this->input->get('passengers'); //get passengers from method get
		$data_rute = $this->M_booking->get_rute($rute_id); //get data_rute from id

		if($data_rute > 0){ //check if rute exsist
			$data_rute_price = $data_rute[0]['price']; //get price from vb data_rute
			$total_payment = $data_rute_price * $passengers;

			// var_dump($data_rute);

			$data['data'] = [ //data array
				'data_rute' => $data_rute[0], //data rute from array 0
				'total_payment' => $total_payment //total payment
			];

			$this->load->view('template/v_header');
			$this->load->view('v_prebooking', $data);
			$this->load->view('template/v_footer');
		}
		else{
			echo "rute tidak ada";
		}

	}
}
