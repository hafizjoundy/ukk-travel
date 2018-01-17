<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class searchfull extends CI_Controller {
	public function index()
	{
		if($this->input->post('rute_from')){
			$rute_from = $this->input->post('rute_from'); //get post
			$rute_to = $this->input->post('rute_to'); //get post
			$depart_date = $this->input->post('depart_date'); //get post
			$total_passengers = $this->input->post('passengers'); //get post
		}
		else{
			echo 'belum search'; //if post = null
		}
		$this->load->view('v_searchfull');
	}
}
