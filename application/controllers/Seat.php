<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seat extends CI_Controller {
	public function index()
	{

        // var_dump();

        
		$this->load->view('V_seat');
	}
}
