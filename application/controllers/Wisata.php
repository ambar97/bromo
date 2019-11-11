<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {
function __construct()
	{
		parent::__construct();
		$this->load->model('M_wisata');
	}
	public function index()
	{
		$data['destinasi']=$this->M_wisata->pilihWisataAll()->result();
		$this->load->view('user/v_wisata',$data);
	}
}
