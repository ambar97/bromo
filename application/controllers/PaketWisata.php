<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaketWisata extends CI_Controller {

	public function index(){
		$this->load->model('M_model');
		$this->load->model('M_paket');
		$data['paket'] = $this->M_model->select('paket_wisata');
		$data['gambar_paket'] = $this->M_paket->selectlimit('galery');
		$this->load->view('user/v_paket', $data);
	}
}
