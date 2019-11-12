<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destination extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_wisata');
		$this->load->library('upload');
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

		// if(isset($_POST['btnSimpan'])){
			$config = array('upload_path' => './gallery/wisata/',
				'allowed_types' => 'gif|jpg|png|jpeg'
			);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('pilih')){
				$upload_data = $this->upload->data ();
				$foto = "gallery/wisata/".$upload_data['file_name'];
				$data = array('nama_wisata' =>$this->input->post('nama') ,
					'rating'=>$this->input->post('rating'),
					'deskripsi_w'=>$this->input->post('deskrip'),
					'harga'=>$this->input->post('harga'),
					'no_telp'=>$this->input->post('noTelp'),
					'lokasi'=>$this->input->post('lokasi'));
				$data = $this->M_wisata->tambahData($data);
				$tr=$this->db->insert_id();
				$isifasil = $this->input->post('fasilitas');
				for ($i=0; $i <count($isifasil) ; $i++) { 
					$fasilitas = array('icon'=>$isifasil[$i],
									'id_wisata'=>$tr);
					$this->M_model->insert('fasilitas',$fasilitas);
				}
				$gambar=array('gambar'=>$foto, 'wisata_idwisata'=>$tr);
				$this->M_wisata->tambahDataGambar($gambar);
				redirect(base_url('admin/Destination'));
			}else{
				echo "ghghgh";
			}
		// }

	}
	public function hapusDataWisata($id){
		$where = array('idwisata'=>$id);
		$this->M_wisata->hapusGalery(array('wisata_idwisata'=>$id));
		$this->M_wisata->hapusWisata($where);

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
