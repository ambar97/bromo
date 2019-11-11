<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {

	public function index(){
		$this->load->model('M_model');
		$data['hotel']=$this->M_model->select('hotel');
		$this->load->view('admin/v_hotel', $data);
	}

	public function editHotel(){
		$this->load->model('M_model');
		$id = $this->uri->segment(4);
		$data['hotel']=$this->M_model->selectwhere('hotel', array('idHotel'=>$id));
		$this->load->view('admin/edit/hotel', $data);
	}

	public function coba(){
		$this->load->view('admin/coba');
	}
}
