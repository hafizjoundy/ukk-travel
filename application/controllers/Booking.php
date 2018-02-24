<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Booking');
	}

	public function index()
	{
		if($this->session->userdata('user') == false){
			redirect(base_url().'account/signin');
		}
		
		$session_key = $this->input->get('key');

		if($this->session->userdata($session_key) !== null){ //check session
			$data['data'] = $this->session->userdata($session_key);
		}
		else{
			redirect(base_url());
		}

		$rute_id = $this->session->userdata($session_key)['rute_id'];
		$data['data_rute'] = $this->M_Booking->get_rute($rute_id)[0];

		$this->load->view('template/V_Header');
		$this->load->view('v_booking', $data);
		$this->load->view('template/V_Footer');
	}

	public function insert_customer()
	{
		if($this->session->userdata('user') == false){
            redirect(base_url().'account/signin');
		}

		$key = $this->input->post('key');
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');

		$form_customer = [
			'name' => $name,
			'address' => $address,
			'phone' => $phone,
			'email' => $email,
			'gender' => $gender
		];

		$value = $this->session->userdata($key); //get from session

		$value['form_customer'] = $form_customer; // add form_customer to session
		$this->session->set_userdata($key, $value);

		redirect(base_url() . 'booking/seat/?key=' . $key);
	}

	public function seat()
	{
		if($this->session->userdata('user') == false){
            redirect(base_url().'account/signin');
		}

		$session_key = $_GET['key'];

		if($this->session->userdata($session_key) !== null){ //check session
			$data['data'] = $this->session->userdata($session_key);
		}
		else{
			redirect(base_url());
		}

		$customer_data = $this->session->userdata($session_key);

		$rute_id = $customer_data['rute_id'];

		$rute = $this->M_Booking->get_rute($rute_id)[0];
		$transportation_seat = $rute['seat_qty'];
		
		$seat_booked = $this->M_Booking->get_seat_booked($rute_id);

		$seat_bookeds = [];
		
		for ($i=0; $i < count($seat_booked); $i++) { 
			$seat_bookeds[] = $seat_booked[$i]['seat'];
		};

		$seat_total = $this->M_Booking->get_seat_total($customer_data['rute_id'])[0]['seat_qty'];

		$data['seat'] = [
			'seat_bookeds' => $seat_bookeds,
			'seat_total' => $seat_total
		];

		$data['data_form'] = $customer_data['form_customer']['name'];
		$data['data'] = $customer_data;
		$data['transportation_seat'] = $transportation_seat;
		$data['data_rute'] = $this->M_Booking->get_rute($customer_data['rute_id'])[0];

		$this->load->view('template/V_Header');
		$this->load->view('V_seat', $data);
		$this->load->view('template/V_Footer');
	}

	public function proccess()
	{
		if($this->session->userdata('user') == false){
            redirect(base_url().'account/signin');
		}

		$user_id = $this->session->userdata('user')['id'];

		$session_key = $this->input->post('key');
		$customer_seat = $this->input->post('seat');
		$customer_data = $this->session->userdata($session_key);

		$code = 'JO'.rand(11111,99999); //generate reservation code
		$reservation_code = $code;

		while (count($this->M_Booking->check_code_reservation($code)) != 0) { //check code mbok ana nng db :3
			$code = 'JO'.rand(11111,99999);
			$reservation_code = $code;
		}
		
		$rute_id = $customer_data['rute_id'];

		$data_reservation = [
			'reservation_code' => $reservation_code,
			'user_id' => $user_id,
			'rute_id' => $rute_id,
		];

		$reservation_id = $this->M_Booking->insert_reservation($data_reservation); //get last id from reservation
		//end insert reservation

		//insert customer
		$customer_form = $customer_data['form_customer'];
		for ($i = 0; $i < count($customer_form['name']); $i++) {
			$data_customer_form = [
				'name' => $customer_form['name'][$i],
				'address' => $customer_form['address'][$i],
				'phone' => $customer_form['phone'][$i],
				'email' => $customer_form['email'][$i],
				'gender' => $customer_form['gender'][$i]
			];
			$customer_id[] = $this->M_Booking->insert_customer($data_customer_form); //get last id from customer
		}
		//end insert customer
		
		//insert passengers
		if (count($customer_id) == count($customer_seat)) {
			for ($i = 0; $i < count($customer_id); $i++) {
				$data_passengers = [
					'customer_id' => $customer_id[$i],
					'reservation_id' => $reservation_id,
					'seat' => $customer_seat[$i]
				];
				$this->M_Booking->insert_passengers($data_passengers);
			}
		}
		//end insert passengers

		$customer_data['reservation_code'] = $reservation_code;
		// $this->session->set_userdata($session_key,$customer_data);
		$this->session->unset_userdata($session_key);
		redirect(base_url().'reservation/status/?reservation_code='.$reservation_code);
	}
}
