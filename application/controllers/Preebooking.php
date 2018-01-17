<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Preebooking extends CI_Controller {
	public function index()
	{
		$this->load->view('v_preebooking');
	}
}
