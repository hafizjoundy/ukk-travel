<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_Dashboard');
	}

	public function index()
	{	
		if($this->session->userdata('user_admin') == false){
            redirect(base_url() . 'admin/account/signin');                            
		}

		$data['reservation'] = $this->M_Dashboard->get_count_table('reservation');
		$data['customer'] = $this->M_Dashboard->get_count_table('customer');
		$data['rute'] = $this->M_Dashboard->get_count_table('rute');
		$data['transportation'] = $this->M_Dashboard->get_count_table('transportation');
		$data['user'] = $this->M_Dashboard->get_count_table('user');
		

		$data['nav'] = 'dashboard';
		$this->load->view('admin/template/V_Header',$data);
		$this->load->view('admin/V_Dashboard',$data);

		$data['script'] = '';
		$this->load->view('admin/template/V_Footer',$data);
	}
}

