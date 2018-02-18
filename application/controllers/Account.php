<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->model('M_account');
    }
    
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


    public function signin_process(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $password_get = $this->M_account->get_password_users($username);
        $password_get = $password_get[0]["password"];

        var_dump(password_verify($password, $password_get));

        // var_dump($password_get);
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

        $password = password_hash($password, PASSWORD_DEFAULT);

        $data = [
            "username" => $username,
            "password" => $password,
            "level" => 1
        ];

        if($this->M_account->signup_insert($data) == true){
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
