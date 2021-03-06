<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaketWisata extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('upload');
	}

	public function index(){
		$data['paket']=$this->M_model->select('paket_wisata');
		$this->load->view('admin/v_paketwisata', $data);
	}

	public function editPaket(){
		$id = $this->uri->segment(4);
		$data['paket'] = $this->M_model->selectwhere('paket_wisata', array('idpaket_wisata'=>$id));
		$data['gallery'] = $this->M_model->selectwhere('galery', array('paket_idpaket'=>$id, 'hotel_idhotel'=>NULL, 'wisata_idwisata'=>NULL));
		$this->load->view('admin/edit/paketwisata', $data);
	}

	public function prosesEditPaket(){
		$id = $this->input->post('idpaket_wisata');
		$data['idpaket_wisata']=$id;
		$data['nama_paket']=$this->input->post('nama_paket');
		$data['harga']=$this->input->post('harga');
		$data['keterangan']=$this->input->post('keterangan');
		$data['durasi']=$this->input->post('durasi');
		$data['include']=$this->input->post('include');
		$data['exclude']=$this->input->post('exclude');
		$this->M_model->update('paket_wisata', $data, array('idpaket_wisata'=>$id));

		$config['upload_path']          = 'gallery/paket';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']						= $id.$data['nama_paket'];
		$this->upload->initialize($config);
		if ( $this->upload->do_upload('gambar')){
						$data = $this->upload->data();
						$name_file=$data['file_name'];
						$gambar_data['gambar'] = $name_file;
						$gambar_data['paket_idpaket'] = $id;
						$this->M_model->insert('galery', $gambar_data);
		}
		redirect(base_url('admin/PaketWisata/editPaket/'.$id));
	}

	public function prosesHapusPaket(){
		$id = $this->uri->segment(4);
		$deletebyidhotel = array('idpaket_wisata'=>$id);
		$deletebyidgambar = array('paket_idpaket'=>$id);
		$this->M_model->delete($deletebyidgambar, 'galery');
		$this->M_model->delete($deletebyidhotel, 'paket_wisata');
		return redirect(base_url('admin/PaketWisata'));
	}

	public function prosesHapusGambar(){
		$id = $this->uri->segment(4);
		$deletebyname = array('gambar'=>$id);
		$idEdit = substr($id, 0, 1);
		// unlink('/gallery/paket/'.$deletebyname);
		$this->M_model->delete($deletebyname, 'galery');
		return redirect(base_url('admin/PaketWisata/editPaket/'.$idEdit));
	}

	public function insertPaket(){
		$this->load->view('admin/insert/paketwisata');
	}

	public function prosesInsertPaket(){
		$data['nama_paket']=$this->input->post('nama_paket');
		$data['harga']=$this->input->post('harga');
		$data['keterangan']=$this->input->post('keterangan');
		$data['durasi']=$this->input->post('durasi');
		$data['include']=$this->input->post('include');
		$data['exclude']=$this->input->post('exclude');
		$this->M_model->insert('paket_wisata', $data);
		$id=$this->db->insert_id();

		$config['upload_path']          = 'gallery/paket';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']						= $id.$data['nama_paket'];
		$this->upload->initialize($config);
		if ( $this->upload->do_upload('gambar')){
						$data = $this->upload->data();
						$name_file=$data['file_name'];
						$gambar_data['gambar'] = $name_file;
						$gambar_data['paket_idpaket'] = $id;
						$this->M_model->insert('galery', $gambar_data);
		}
		redirect(base_url('admin/PaketWisata'));
	}

	public function coba(){
		$this->load->view('admin/coba');
	}
}
