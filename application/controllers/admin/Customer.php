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
		if($this->session->userdata('user_admin') == false){
            redirect(base_url() . 'admin/account/signin');                            
		}
		
		$customer = $this->M_Customer_Admin->get_customer();
		$data['customer'] = $customer;
		$data['nav'] = 'customer';
		// var_dump($data);
		// die;
        $this->load->view('admin/template/V_Header',$data);
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

		if($this->session->userdata('user_admin') == false){
            redirect(base_url() . 'admin/account/signin');                            
		}

        $name = $this->input->post('name');
        $address = $this->input->post('address');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $gender = $this->input->post('gender');

        $data = [
            'name' => $name,
            'address' => $address,
            'phone' => $phone,
            'email' => $email,
            'gender' => $gender  
        ];
        
        $this->M_Customer_Admin->add($data);

        redirect(base_url().'admin/customer');
    }

	public function viewedit($id = null){
		if($this->session->userdata('user_admin') == false){
            redirect(base_url() . 'admin/account/signin');                            
		}

		if($id == null){
			redirect(base_url().'admin/customer');
		}

		$data['customer'] = $this->M_Customer_Admin->get_customer_id($id);

		$this->load->view('admin/V_Customer_Viewedit',$data);
		
	}

	public function update(){
		if($this->session->userdata('user_admin') == false){
            redirect(base_url() . 'admin/account/signin');                            
		}

		$id = $this->input->post('id');
		$name = $this->input->post('name');
        $address = $this->input->post('address');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $gender = $this->input->post('gender');

        $data = [
            'name' => $name,
            'address' => $address,
            'phone' => $phone,
            'email' => $email,
            'gender' => $gender  
        ];

		$this->M_Customer_Admin->update($data,$id);
		redirect(base_url().'admin/customer');
	}

	public function delete($id = null){
		if($this->session->userdata('user_admin') == false){
            redirect(base_url() . 'admin/account/signin');                            
		}

		if($id == null){
			redirect(base_url().'admin/customer');
		}
		$this->M_Customer_Admin->delete($id);	
		redirect(base_url().'admin/customer');			
	}
}
