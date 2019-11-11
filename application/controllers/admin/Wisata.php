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
		$data = array('nama_wisata' =>$this->input->post('nama') ,
					'rating'=>$this->input->post('rating'),
					'deskripsi'=>$this->input->post('deskrip'),
					'judul_eng'=>$this->input->post('namae') ,
					'deskripsi_eng'=>$this->input->post('deskripe') ,
					'harga'=>$this->input->post('harga') ,
					'harga_2'=>$this->input->post('hargae'));
		// $gambar = array('deskripsi' => , );
		// die(var_dump($data));
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
