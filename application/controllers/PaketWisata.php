<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaketWisata extends CI_Controller {

	public function index(){
		$this->load->model('M_model');
		$data['paket'] = $this->M_model->select('paket_wisata');
		$this->load->view('user/v_paket', $data);
	}

	public function detailPaket(){
		$this->load->model('M_model');
		$this->load->model('M_paket');
		$id = $this->uri->segment(3);
		$data['gambar'] = $this->M_model->selectwhere('galery', array('paket_idpaket'=>$id, 'wisata_idwisata'=>NULL, 'hotel_idhotel'=>NULL));
		$data['paket'] = $this->M_model->selectwhere('paket_wisata', array('idpaket_wisata'=>$id));
		$this->load->view('user/v_detailpaket', $data);
	}
}
