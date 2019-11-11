<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destination extends CI_Controller {
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
		if(isset($_POST['btnSimpan'])){
			$config = array('upload_path' => './gallery/wisata/',
				'allowed_types' => 'gif|jpg|png|jpeg'
			);
			$this -> load -> library ('upload',$config);
			if ($this->upload->do_upload('photo')){
				$upload_data = $this -> upload -> data ();
				$foto = "gallery/wisata/".$upload_data['file_name'];
				$data = array('nama_wisata' =>$this->input->post('nama') ,
				'rating'=>$this->input->post('rating'),
				'deskripsi'=>$this->input->post('deskrip'),
				'harga'=>$this->input->post('harga'));
		// die(var_dump($data));
		$data = $this->M_wisata->tambahData($data);
		redirect(base_url('admin/Destination'));
			}else{
				echo "ghghgh";
			}
		}
	}
	public function hapusDataWisata($id){
		$where = array('idwisata'=>$id);
		$this->M_wisata->hapusWisata($where);
		// $this->M_wisata->hapusGalery(array('wisata_idwisata'=>$id));

		redirect(base_url('admin/Destination'));
	}
	public function ubahWisata(){
		$data['wisata']=$this->M_wisata->pilihWisatawhere();
		$this->load->view('admin/edit/wisata',$data);
	}
	public function update(){
		$where= array('idwisata'=>$this->input->post('idN'));
		$data = array('nama_wisata' =>$this->input->post('nama') ,
				'rating'=>$this->input->post('rating'),
				'deskripsi'=>$this->input->post('deskrip'),
				'harga'=>$this->input->post('harga'));
		$this->M_wisata->perbarui($data,$where);
		redirect(base_url('admin/Destination'));
	}
}
