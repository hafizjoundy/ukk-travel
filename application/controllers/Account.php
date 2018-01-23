<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
	public function index()
	{
		$this->load->view('v_home');
    }
    
    public function signin()
    {
        $this->load->view('template/v_header');
        $this->load->view('v_signin');
        $this->load->view('template/v_footer');
    }

    public function signin_insert(){

    }

    public function signup()
    {
        $this->load->view('template/v_header');
        $this->load->view('v_signup');
        $this->load->view('template/v_footer');
    }

    public function signup_process(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $address = $this->input->post('address');
        $phone = $this->input->post('phone');
        $gender = $this->input->post('gender');

        echo $username;
        echo $password;
        echo $fname;
        echo $lname;
        echo $address;
        echo $phone;
        echo $gender;

    }

    public function logout()
    {

    }

}
