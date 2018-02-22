<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_Booking');
	}

	public function index()
	{
		if($this->input->get('rute_from')){
			$rute_from = $this->input->get('rute_from'); //get from get method
			$rute_to = $this->input->get('rute_to'); //get from get method
			$depart_date = $this->input->get('depart_date'); //get from get method
			$passengers = $this->input->get('passengers'); //get from get method
			$flight_class = $this->input->get('flight_class'); //get from get method

			$dateFormated = explode("/",$depart_date); //format date from get
			$depart_date = "$dateFormated[2]-$dateFormated[0]-$dateFormated[1]";

			$data = [ //make data to array
				'date(depart)' => $depart_date,
				'rute_from' => $rute_from,
				'rute_to' => $rute_to,
				'class' => $flight_class
			];

			$data_session = [ //data session
				'flight' => [ //flight session
					'passengers' => $passengers
					// 'class' => $flight_class
				]
			];

			// $this->session->set_userdata($data_session); //make variabel session

			$search = $this->M_Booking->search_rute($data); // search 

			// var_dump($search);
			// die;
			if(count($search) == 0){
				// echo "tidak ditemukan rute nya :("; //if rute  == 0
				$this->load->view('template/V_Header');
				$this->load->view('V_Search_not_found');
				$this->load->view('template/V_Footer');
				
			}

			else{
				$v_data = [
					'data' => $search
				];
				$this->load->view('template/V_Header');
				$this->load->view('V_Search', $v_data); //view if rute > 0
				$this->load->view('template/V_Footer');
			}
			
		}
		else{
			echo 'belum search'; //if get = nulll
		}
	}
}
