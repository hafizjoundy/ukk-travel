<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Account');
    }

    public function index()
    {
        $this->load->view('V_Home');
    }

    public function signin()
    {
        if ($this->session->userdata('user') == true) {
            redirect(base_url());
        }

        $this->load->view('template/V_Header');
        $this->load->view('v_signin');
        $this->load->view('template/V_Footer');
    }


    public function signin_process()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user_data = $this->M_Account->get_password_users($username);

        if (count($user_data) == 0) {
            redirect(base_url() . 'account/signin?alert=failed');
        }

        $password_get = $user_data[0]["password"];
        $user_id = $user_data[0]["id"];

        if (password_verify($password, $password_get) == true) {
            $value = [
                'username' => $username,
                'id' => $user_id
            ];

            $this->session->set_userdata('user',$value);
            
            if ($this->input->post('url_before') !== '') {
            
            if($this->session->userdata($this->input->post('url_before'))){
                redirect($this->session->userdata($this->input->post('url_before')));
            }
            else{
                redirect(base_url());
            }

        }
        else {
            redirect(base_url());
        }


        } else {
            redirect(base_url() . 'account/signin?alert=failed');
        }
        // var_dump($password_get);
    }

    public function signup()
    {
        $this->load->view('template/V_Header');
        $this->load->view('v_signup');
        $this->load->view('template/V_Footer');
    }

    public function signup_process()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $password = password_hash($password, PASSWORD_DEFAULT);

        $data = [
            "username" => $username,
            "password" => $password,
            "level" => 1
        ];

        if ($this->M_Account->signup_insert($data) == true) {
            redirect(base_url() . 'account/signin?alert=success');
        } else {
            redirect(base_url() . 'account/signup?alert=failed');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('user');
        redirect(base_url());
    }

}
