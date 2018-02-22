<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->model('M_Account');
    }
    
	public function index()
	{
		$this->load->view('V_Home');
    }
    
    public function signin()
    {
        $this->load->view('template/V_Header');
        $this->load->view('v_signin');
        $this->load->view('template/V_Footer');
    }


    public function signin_process(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $password_get = $this->M_Account->get_password_users($username);
        $password_get = $password_get[0]["password"];

        var_dump(password_verify($password, $password_get));

        // var_dump($password_get);
    }

    public function signup()
    {
        $this->load->view('template/V_Header');
        $this->load->view('v_signup');
        $this->load->view('template/V_Footer');
    }

    public function signup_process(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $password = password_hash($password, PASSWORD_DEFAULT);

        $data = [
            "username" => $username,
            "password" => $password,
            "level" => 1
        ];

        if($this->M_Account->signup_insert($data) == true){
            echo "pendaftaran sukses";
        }
        else{
            echo "pendaftaran gagal";
        }
    }

    public function logout()
    {

    }

}
