<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_Reservation_Admin');
	}

	public function index()
	{		
		if($this->session->userdata('user_admin') == false){
            redirect(base_url() . 'admin/account/signin');                            
		}

		$reservation = $this->M_Reservation_Admin->get_reservation();
		$data['reservation'] = $reservation;
		$data['nav'] = 'reservation';
		// var_dump($data);
		// die;
        $this->load->view('admin/template/V_Header',$data);
		$this->load->view('admin/V_Reservation',$data);
		
		$script = '<script>
		function viewedit(id){
		  $.ajax({url: "'.base_url().'admin/reservation/viewedit/"+id, success: function(result){
					$("#viewedit").html(result);
		  }});
		}
		</script>';
		$data['script'] = $script;
		$this->load->view('admin/template/V_Footer',$data);
	}

	public function viewedit($id = null){
		if($this->session->userdata('user_admin') == false){
            redirect(base_url() . 'admin/account/signin');                            
		}

		if($id == null){
			redirect(base_url().'admin/reservation');
		}

		$data['reservation'] = $this->M_Reservation_Admin->get_reservation_id($id);

		$this->load->view('admin/V_Reservation_Viewedit',$data);
		
	}

	public function update(){
		if($this->session->userdata('user_admin') == false){
            redirect(base_url() . 'admin/account/signin');                            
		}

		$id = $this->input->post('id');
		$status = $this->input->post('status');
		$this->M_Reservation_Admin->update($status,$id);
		redirect(base_url().'admin/reservation');
	}

	public function delete($id = null){
		if($this->session->userdata('user_admin') == false){
            redirect(base_url() . 'admin/account/signin');                            
		}

		if($id == null){
			redirect(base_url().'admin/reservation');
		}
		$this->M_Reservation_Admin->delete($id);	
		redirect(base_url().'admin/reservation');			
	}
}
