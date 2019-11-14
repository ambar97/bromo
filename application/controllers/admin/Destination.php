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

	public function prosesEditFasilitas(){
		$this->load->model('M_model');
		$id = $this->input->post('idwisata');
		$this->M_model->delete(array('id_wisata'=>$id), 'fasilitas');
		$isifasil = $this->input->post('fasilitas');
		for ($i=0; $i <count($isifasil) ; $i++) {
			$fasilitas = array('icon'=>$isifasil[$i],
							'id_wisata'=>$id);
			$this->M_model->insert('fasilitas',$fasilitas);
		}
		redirect(base_url('admin/Destination/ubahWisata/'.$id));
	}

	public function prosesHapusGambar(){
		$this->load->model('M_model');
		$id = $this->uri->segment(4);
		$deletebyname = array('gambar'=>$id);
		// unlink(base_url().'gallery/hotel/'.$deletebyname);
		$this->M_model->delete($deletebyname, 'galery');
		return redirect(base_url('admin/Destination/'));
	}

	public function hapusDataWisata($id){
		$where = array('idwisata'=>$id);
		$this->M_wisata->hapusGalery(array('wisata_idwisata'=>$id));
		$this->M_wisata->hapusWisata($where);

		redirect(base_url('admin/Destination'));
	}
	public function ubahWisata(){
		$this->load->model('M_model');
		$this->load->model('M_wisata');
		$id = $this->uri->segment(4);
		$data['wisata']=$this->M_model->selectwhere('wisata', array('idwisata'=>$id));
		$data['gallery'] = $this->M_model->selectwhere('galery', array('wisata_idwisata'=>$id, 'hotel_idhotel'=>NULL, 'paket_idpaket'=>NULL));
		$data['fasilitas'] = $this->M_wisata->editFasilitas($id);
		$data['daftar_fasilitas'] = $this->M_model->selectwhere('daftar_fasilitas', array('id_wisata'=>1));
		$this->load->view('admin/edit/wisata',$data);
	}
	// public function update(){
	// 	$id = $this->input->post('idN');
	// 	$where= array('idwisata'=>$id);
	// 	$data = array('nama_wisata' =>$this->input->post('nama') ,
	// 		'rating'=>$this->input->post('rating'),
	// 		'deskripsi_w'=>$this->input->post('deskrip'),
	// 		'harga'=>$this->input->post('harga'));
	// 	$this->M_wisata->perbarui($data,$where);
	//
	// 	$config['upload_path']          = 'gallery/wisata';
	// 	$config['allowed_types']        = 'gif|jpg|png';
	// 	$config['file_name']						= $id.$data['nama_wisata'];
	//
	// 	$this->load->library('upload', $config);
	// 	if ( $this->upload->do_upload('gambar')){
	// 					$data = $this->upload->data();
	// 					$name_file=$data['file_name'];
	// 					$gambar_data['gambar'] = $name_file;
	// 					$gambar_data['wisata_idwisata'] = $id;
	// 					$this->M_model->insert('galery', $gambar_data);
	// 	}
	// 	redirect(base_url('admin/Destination'));
	// }
	public function prosesEditWisata(){
    $this->load->model('M_model');
		$id = $this->input->post('idN');
		$data['idwisata']=$id;
		$data['nama_wisata']=$this->input->post('nama');
		$data['harga']=$this->input->post('harga');
		$data['rating']=$this->input->post('rating');
		$data['deskripsi_w']=$this->input->post('deskrip');
		$this->M_model->update('wisata', $data, array('idwisata'=>$id));

		$config['upload_path']          = 'gallery/wisata';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']						= $id.$data['nama_wisata'];

		$this->upload->initialize($config);
		if ( $this->upload->do_upload('gambar')){
						$data = $this->upload->data();
						$name_file=$data['file_name'];
						$gambar_data['gambar'] = $name_file;
						$gambar_data['wisata_idwisata'] = $id;
						$this->M_model->insert('galery', $gambar_data);
		}
		else {
			$arr_image = array('upload_data' => $this->upload->data());
							 print_r($arr_image);
		}
		redirect(base_url('admin/Destination/ubahWisata/'.$id));
	}
}
