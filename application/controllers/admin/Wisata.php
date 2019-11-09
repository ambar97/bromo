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
		$data['wisata']=$this->M_wisata->pilihWisata()->result();
		$this->load->view('admin/v_wisata',$data);
	}
	public function tambahWisata(){
		$this->load->view('admin/insert/wisata');
	}
	public function tabahDataWisata(){

	}
	public function hapusDataWisata($id){
		$where = array('idwisata'=>$id);
		$this->M_wisata->hapusWisata($where);
		// $this->M_wisata->hapusGalery(array('wisata_idwisata'=>$id));

		redirect(base_url('admin/Wisata'));
	}
	public function ubahWisata(){
		$this->load->view('admin/update/wisata');
	}
}
