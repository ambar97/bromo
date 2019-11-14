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
		$data['slider']=$this->M_model->selectwhere('galery',array('tipe'=>'slider'));
		$this->load->view('user/v_home',$data);
	}
	public function hapusGal(){
		
	}
	public function profile(){
		$this->load->view('user/profile');
	}

}
