<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rute extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_Rute_Admin');
	}

	public function index()
	{	
		$rute = $this->M_Rute_Admin->get_rute();
		$transportation = $this->M_Rute_Admin->get_transportation();
		$data['rute'] = $rute;
		$data['transportation'] = $transportation;
		// var_dump($data);
		// die;
        $this->load->view('admin/template/V_Header');
		$this->load->view('admin/V_rute',$data);
		
		$script = '<script>
		function viewedit(id){
		  $.ajax({url: "'.base_url().'admin/rute/viewedit/"+id, success: function(result){
					$("#viewedit").html(result);
		  }});
		}
		</script>';
		$data['script'] = $script;
		$this->load->view('admin/template/V_Footer',$data);
    }
    
    public function add(){
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
        
        $this->M_Rute_Admin->add($data);

        redirect(base_url().'admin/rute');
    }

	public function viewedit($id = null){
		if($id == null){
			redirect(base_url().'admin/rute');
		}

		$data['rute'] = $this->M_Rute_Admin->get_rute_id($id);

		$this->load->view('admin/V_rute_Viewedit',$data);
		
	}

	public function update(){
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

		$this->M_Rute_Admin->update($data,$id);
		redirect(base_url().'admin/rute');
	}

	public function delete($id = null){
		if($id == null){
			redirect(base_url().'admin/rute');
		}
		$this->M_Rute_Admin->delete($id);	
		redirect(base_url().'admin/rute');			
	}
}
