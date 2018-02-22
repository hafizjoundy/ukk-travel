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
			$rute_from = $this->input->get('rute_from'); 
			$rute_to = $this->input->get('rute_to'); 
			$depart_date = $this->input->get('depart_date'); 
			$passengers = $this->input->get('passengers'); 
			$flight_class = $this->input->get('flight_class'); 

			//format output date from template :)
			$dateFormated = explode("/",$depart_date);
			$depart_date = "$dateFormated[2]-$dateFormated[0]-$dateFormated[1]";

			//make variable arrau to insert database
			$data = [ 
				'date(depart)' => $depart_date, 
				'rute_from' => $rute_from,
				'rute_to' => $rute_to,
				'class' => $flight_class
			];

			$search = $this->M_Booking->search_rute($data); 

			if(count($search) == 0){ //chect if search not exist..
				$this->load->view('template/V_Header');
				$this->load->view('V_Search_not_found');
				$this->load->view('template/V_Footer');
			}

			else{
				$v_data = [
					'data' => $search
				];
				$this->load->view('template/V_Header');
				$this->load->view('V_Search', $v_data);
				$this->load->view('template/V_Footer');
			}
			
		}
		else{
			redirect(base_url());
		}
	}
}
