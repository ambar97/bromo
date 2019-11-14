<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->model('M_model');
		$data['hotel'] = $this->M_model->select('hotel');
		$this->load->view('user/v_hotel', $data);
	}

	public function detailHotel(){
		$id = $this->uri->segment(3);
		$data['gambar'] = $this->M_model->selectwhere('galery', array('hotel_idhotel'=>$id, 'wisata_idwisata'=>NULL, 'paket_idpaket'=>NULL));
		$data['hotel'] = $this->M_model->selectwhere('hotel', array('idhotel'=>$id));
		$this->load->view('user/v_detailhotel', $data);
	}
}
