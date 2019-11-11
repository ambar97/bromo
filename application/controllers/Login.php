<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('v_login');
	}
	public function logindulu(){
		$where = array('username' =>$this->input->post('usernm'),
						'password'=>md5($this->input->post('psw')));
		$cek = $this->M_model->cek_login("admin",$where)->num_rows();
		$cek1 = $this->M_model->cek_login("admin",$where)->row();
		if($cek > 0){
			$data_session = array(
				'id' => $cek1->idadmin,
				'nama'=>$cek1->nama,
				'status' => "login"
				);
 			
			$this->session->set_userdata($data_session);
			redirect(base_url("admin/Destination"));
		}else{
			redirect(base_url("Login"));
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Login'));
	}
}
