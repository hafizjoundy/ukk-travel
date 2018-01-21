<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class searchfull extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_searchfull');
	}

	public function index()
	{
		if($this->input->post('rute_from')){
			$rute_from = $this->input->post('rute_from'); //get post
			$rute_to = $this->input->post('rute_to'); //get post
			$depart_date = $this->input->post('depart_date'); //get post
			$total_passengers = $this->input->post('passengers'); //get post

			$data = [ //make data to array
				'depart_date' => $depart_date,
				'rute_from' => $rute_from,
				'rute_to' =>$rute_to
			];

			$search = $this->m_searchfull->search_rute($data); // search 
			// echo $rute_from."<br>";
			// echo $rute_to."<br>";
			// echo $depart_date."<br>";
			// echo $total_passengers."<br>";

			if(count($search) == 0){
				// echo "tidak ditemukan rute nya :("; //if rute  == 0
				$this->load->view('v_searchnotfound');
			}
			else{
				$v_data['data'] = $search;
				$this->load->view('v_searchfull', $v_data); //view if rute > 0
			}
			
		}
		else{
			echo 'belum search'; //if post = nulll
		}
	}
}
