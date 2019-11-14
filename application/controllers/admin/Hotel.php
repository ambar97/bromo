<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_hotel');
		$this->load->library('upload');
	}

	public function index(){
		$this->load->model('M_model');
		$data['hotel']=$this->M_model->select('hotel');
		$this->load->view('admin/v_hotel', $data);
	}

	public function editHotel(){
		$id = $this->uri->segment(4);
		$data['hotel'] = $this->M_model->selectwhere('hotel', array('idhotel'=>$id));
		$data['gallery'] = $this->M_model->selectwhere('galery', array('hotel_idhotel'=>$id, 'wisata_idwisata'=>NULL, 'paket_idpaket'=>NULL));
		$data['fasilitas'] = $this->M_hotel->editFasilitas($id);
		$data['daftar_fasilitas'] = $this->M_model->select('daftar_fasilitas');
		$this->load->view('admin/edit/hotel', $data);
	}

	public function prosesEditHotel(){
		$id = $this->input->post('idhotel');
		$data['idhotel']=$id;
		$data['nama_hotel']=$this->input->post('nama_hotel');
		$data['rating']=$this->input->post('rating');
		$data['deskripsi']=$this->input->post('deskripsi');
		$data['harga']=$this->input->post('harga');
		$this->M_model->update('hotel', $data, array('idhotel'=>$id));

		$config['upload_path']          = 'gallery/hotel';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']						= $id.$data['nama_hotel'];

		$this->upload->initialize($config);
		if ( $this->upload->do_upload('gambar')){
						$data = $this->upload->data();
						$name_file=$data['file_name'];
						$gambar_data['gambar'] = $name_file;
						$gambar_data['hotel_idhotel'] = $id;
						$this->M_model->insert('galery', $gambar_data);
		}
		redirect(base_url('admin/Hotel/editHotel/'.$id));
	}

	public function editFasilitas(){
		$data['fasilitas'] = $this->M_model->select('daftar_fasilitas');
		$this->load->view('admin/edit/editFasilitasHotel', $data);
	}

	public function prosesTambahFasilitas(){
		$data['icon'] = $this->input->post('icon');
		$data['nama_fasilitas'] = $this->input->post('nama_fasilitas');
		$this->M_model->insert('daftar_fasilitas', $data);
		return redirect(base_url('admin/Hotel/editFasilitas'));
	}

	public function  prosesHapusFasilitas(){
		$id = $this->uri->segment(4);
		$this->M_model->delete(array('id_fasilitas'=>$id), 'daftar_fasilitas');
		return redirect(base_url('admin/Hotel/editFasilitas'));
	}

	public function prosesEditFasilitas(){
		$id = $this->input->post('idhotel');
		$this->M_model->delete(array('id_hotel'=>$id), 'fasilitas');
		$isifasil = $this->input->post('fasilitas');
		for ($i=0; $i <count($isifasil) ; $i++) {
			$fasilitas = array('icon'=>$isifasil[$i],
							'id_hotel'=>$id);
			$this->M_model->insert('fasilitas',$fasilitas);
		}
		redirect(base_url('admin/Hotel/editHotel/'.$id));
	}

	public function prosesHapusHotel(){
		$id = $this->uri->segment(4);
		$deletebyidhotel = array('idhotel'=>$id);
		$deletebyidgambar = array('hotel_idhotel'=>$id);
		$this->M_model->delete($deletebyidgambar, 'galery');
		$this->M_model->delete($deletebyidhotel, 'hotel');
		return redirect(base_url('admin/Hotel'));
	}

	public function prosesHapusGambar(){
		$id = $this->uri->segment(4);
		$deletebyname = array('gambar'=>$id);
		$idEdit = substr($id, 0, 1);
		// unlink(base_url().'gallery/hotel/'.$deletebyname);
		$this->M_model->delete($deletebyname, 'galery');
		return redirect(base_url('admin/Hotel/').$idEdit);
	}

	public function insertHotel(){
		$data['daftar_fasilitas'] = $this->M_model->select('daftar_fasilitas');
		$this->load->view('admin/insert/hotel', $data);
	}

	public function prosesInsertHotel(){
		$data['idhotel']=$id;
		$data['nama_hotel']=$this->input->post('nama_hotel');
		$data['rating']=$this->input->post('rating');
		$data['deskripsi']=$this->input->post('deskripsi');
		$data['harga']=$this->input->post('harga');
		$this->M_model->insert('hotel', $data);
		$id = $this->db->insert_id();
		$isifasil = $this->input->post('fasilitas');
		for ($i=0; $i <count($isifasil) ; $i++) {
			$fasilitas = array('icon'=>$isifasil[$i],
							'id_hotel'=>$id);
			$this->M_model->insert('fasilitas',$fasilitas);
		}
		$config['upload_path']          = 'gallery/hotel';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']						= $id.$data['nama_hotel'];

		$this->upload->initialize($config);
		if ( $this->upload->do_upload('gambar')){
						$data = $this->upload->data();
						$name_file=$data['file_name'];
						$gambar_data['gambar'] = $name_file;
						// $id=$this->db->insert_id();
						$gambar_data['hotel_idhotel'] = $id;
						$this->M_model->insert('galery', $gambar_data);
		}
		redirect(base_url('admin/Hotel'));
	}

	public function coba(){
		$this->load->view('admin/coba');
	}
}
