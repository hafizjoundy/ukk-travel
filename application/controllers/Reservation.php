<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Reservation');
    }

	public function status()
	{
        $user_id = 
        $reservation_code = $_GET['reservation_code'];
        
        $data['customer'] = $this->M_Reservation->get_all_customer($reservation_code);
        $data['rute'] = $this->M_Reservation->get_rute($reservation_code);
        if(count($data['customer']) or count($data['customer']) == 0)

		$this->load->view('template/V_Header');
		$this->load->view('V_Reservation',$data);
		$this->load->view('template/V_Footer');
	}
}