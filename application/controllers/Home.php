<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
			$this->load->model("M_home");
	}

	public function index(){
		$data['paket']=$this->M_model->select('paket_wisata')->result();
		$data['wisata']=$this->M_model->select('wisata')->result();
		$this->load->view('user/v_home',$data);
	}
	public function profile(){
		$this->load->view('user/profile');
	}

}
