<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_User_Admin');
	}

	public function index()
	{	
		$user = $this->M_User_Admin->get_user();
		$data['user'] = $user;
		$data['nav'] = 'user';
		// var_dump($data);
		// die;
        $this->load->view('admin/template/V_Header',$data);
		$this->load->view('admin/V_user',$data);
		
		$script = '<script>
		function viewedit(id){
		  $.ajax({url: "'.base_url().'admin/user/viewedit/"+id, success: function(result){
					$("#viewedit").html(result);
		  }});
		}
		</script>';
		$data['script'] = $script;
		$this->load->view('admin/template/V_Footer',$data);
    }
    
    public function add(){
        $username = $this->input->post('username');
		$password = $this->input->post('password');
		$password = password_hash($password, PASSWORD_DEFAULT);
        $level = $this->input->post('level');

        $data = [
            'username' => $username,
            'password' => $password,
            'level' => $level
        ];
        
        $this->M_User_Admin->add($data);

        redirect(base_url().'admin/user');
    }

	public function viewedit($id = null){
		if($id == null){
			redirect(base_url().'admin/user');
		}

		$data['user'] = $this->M_User_Admin->get_user_id($id);

		$this->load->view('admin/V_user_Viewedit',$data);
		
	}

	public function update(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$password = password_hash($password, PASSWORD_DEFAULT);
        $level = $this->input->post('level');

        $data = [
            'username' => $username,
            'password' => $password,
            'level' => $level
        ];

		$this->M_User_Admin->update($data,$id);
		redirect(base_url().'admin/user');
	}

	public function delete($id = null){
		if($id == null){
			redirect(base_url().'admin/user');
		}
		$this->M_User_Admin->delete($id);	
		redirect(base_url().'admin/user');			
	}
}
