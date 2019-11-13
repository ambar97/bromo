<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {

	public function index(){
		$this->load->model('M_model');
		$data['hotel'] = $this->M_model->select('hotel');
		$this->load->view('user/v_hotel', $data);
	}
}
