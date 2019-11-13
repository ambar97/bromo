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

	function loginUser(){
		$this->load->view('logres.php');
	}
	function register(){
		$data=array('nama'=>$this->input->post('nama'),
					'alamat'=>$this->input->post('alamat'),
					'email' =>$this->input->post('email'),
					'no_telp' =>$this->input->post('no'));
		$this->M_model->insert('customers',$data);
		$rt = $this->db->insert_id();
		$user=array('username'=>$this->input->post('user'),
					'password' => md5($this->input->post('pass')),
					'customers_idcustomers '=>$rt);
		$this->M_model->insert('users',$user);
		redirect(base_url('Login/loginUser'));
	}

	public function loginYa(){
		$where = array('username' =>$this->input->post('username'),
						'password'=>md5($this->input->post('password')));
		$cek = $this->M_model->cek_login("users",$where)->num_rows();
		$cek1 = $this->M_model->cek_login("users",$where)->row();
		if($cek > 0){
			$data_session = array(
				'id' => $cek1->idusers,
				'nama'=>$cek1->nama,
				'status' => "login"
				);
 			
			$this->session->set_userdata($data_session);
			redirect(base_url("Home"));
		}else{
			redirect(base_url("Login/loginUser"));
		}
	}
	public function logoutUser(){
		$this->session->sess_destroy();
		redirect(base_url('Login/loginUser'));
	}

}
