<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transportation extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_Transportation_Admin');
	}

	public function index()
	{	

		if($this->session->userdata('user_admin') == false){
            redirect(base_url() . 'admin/account/signin');                            
		}
		$transportation = $this->M_Transportation_Admin->get_transportation();
		$data['transportation'] = $transportation;
		$data['nav'] = 'transportation';
		// var_dump($data);
		// die;
        $this->load->view('admin/template/V_Header',$data);
		$this->load->view('admin/V_transportation',$data);
		
		$script = '<script>
		function viewedit(id){
		  $.ajax({url: "'.base_url().'admin/transportation/viewedit/"+id, success: function(result){
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
        $code = $this->input->post('code');
        $description = $this->input->post('description');
        $totalseat = $this->input->post('totalseat');

        $data = [
            'code' => $code,
            'description' => $description,
            'seat_qty' => $totalseat
        ];
        
        $this->M_Transportation_Admin->add($data);

        redirect(base_url().'admin/transportation');
    }

	public function viewedit($id = null){

		if($this->session->userdata('user_admin') == false){
            redirect(base_url() . 'admin/account/signin');                            
		}
		if($id == null){
			redirect(base_url().'admin/transportation');
		}

		$data['transportation'] = $this->M_Transportation_Admin->get_transportation_id($id);

		$this->load->view('admin/V_transportation_Viewedit',$data);
		
	}

	public function update(){

		if($this->session->userdata('user_admin') == false){
            redirect(base_url() . 'admin/account/signin');                            
		}
		$id = $this->input->post('id');
		$code = $this->input->post('code');
        $description = $this->input->post('description');
        $totalseat = $this->input->post('totalseat');

        $data = [
            'code' => $code,
            'description' => $description,
            'seat_qty' => $totalseat
        ];

		$this->M_Transportation_Admin->update($data,$id);
		redirect(base_url().'admin/transportation');
	}

	public function delete($id = null){

		if($this->session->userdata('user_admin') == false){
            redirect(base_url() . 'admin/account/signin');                            
		}
		if($id == null){
			redirect(base_url().'admin/transportation');
		}
		$this->M_Transportation_Admin->delete($id);	
		redirect(base_url().'admin/transportation');			
	}
}
