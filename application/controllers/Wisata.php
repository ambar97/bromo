<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {
function __construct(){
		parent::__construct();
		$this->load->model('M_wisata');
	}

	public function index(){
		$data['destinasi']=$this->M_model->select('wisata');
		$this->load->view('user/v_wisata',$data);
	}

	public function detailWisata(){
		$id = $this->uri->segment(3);
		$data['gambar'] = $this->M_model->selectwhere('galery', array('wisata_idwisata'=>$id, 'hotel_idhotel'=>NULL, 'paket_idpaket'=>NULL));
		$data['wisata'] = $this->M_model->selectwhere('wisata', array('idwisata'=>$id));
		$this->load->view('user/v_detailwisata', $data);
	}
}
