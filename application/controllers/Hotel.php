<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {

	public function index(){
		$this->load->model('M_model');
		$this->load->model('M_hotel');
		$data['hotel'] = $this->M_model->select('hotel');
		$data['gambar_hotel'] = $this->M_hotel->selectlimit('galery');
		$this->load->view('user/v_hotel');
	}
}
