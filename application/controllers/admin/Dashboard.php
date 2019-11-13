<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/v_dashboard');
	}
	public function profile(){
		$this->load->view('admin/v_profile');
	}
	public function home(){
		$data['slider']=$this->M_model->selectwhere('galery',array('tipe'=>'slider'));
		$this->load->view('admin/home',$data);
	}
}
