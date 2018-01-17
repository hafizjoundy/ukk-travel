<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
	public function index()
	{
		$this->load->view('v_home');
    }
    
    public function signin()
    {
        $this->load->view('v_signin');
    }

    public function signup()
    {
        $this->load->view('v_signup');
    }

    public function logout()
    {

    }

}
