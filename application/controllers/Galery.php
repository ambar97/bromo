<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galery extends CI_Controller {

	public function index()
	{
		$data['lery']=$this->M_model->selectwhere('galery',array('wisata_idwisata'=>NULL,
																'hotel_idhotel'=>NULL,'paket_idpaket'=>NULL, 'tipe'=>NULL));
		$this->load->view('user/v_gallery',$data);
	}
}
