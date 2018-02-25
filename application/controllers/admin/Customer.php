<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_Customer_Admin');
	}

	public function index()
	{	
		$customer = $this->M_Customer_Admin->get_customer();
		$data['customer'] = $customer;
		// var_dump($data);
		// die;
        $this->load->view('admin/template/V_Header');
		$this->load->view('admin/V_Customer',$data);
		
		$script = '<script>
		function viewedit(id){
		  $.ajax({url: "'.base_url().'admin/customer/viewedit/"+id, success: function(result){
					$("#viewedit").html(result);
		  }});
		}
		</script>';
		$data['script'] = $script;
		$this->load->view('admin/template/V_Footer',$data);
    }
    
    public function add(){
        $name = $this
    }

	public function viewedit($id = null){
		if($id == null){
			redirect(base_url().'admin/customer');
		}

		$data['reservation'] = $this->M_Customer_Admin->get_customer_id($id);

		$this->load->view('admin/V_Customer_Viewedit',$data);
		
	}

	public function update(){
		$id = $this->input->post('id');
		$status = $this->input->post('status');
		$this->M_Customer_Admin->update($status,$id);
		redirect(base_url().'admin/customer');
	}

	public function delete($id = null){
		if($id == null){
			redirect(base_url().'admin/customer');
		}
		$this->M_Customer_Admin->delete($id);	
		redirect(base_url().'admin/customer');			
	}
}
