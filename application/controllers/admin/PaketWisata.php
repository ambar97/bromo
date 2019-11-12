<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaketWisata extends CI_Controller {

	public function index(){
		$this->load->model('M_model');
		$data['paket']=$this->M_model->select('paket_wisata');
		$this->load->view('admin/v_paketwisata', $data);
	}

	public function editPaket(){
		$this->load->model('M_model');
		$id = $this->uri->segment(4);
		$data['Paket'] = $this->M_model->selectwhere('Paket', array('idpaket_wisata'=>$id));
		$data['gallery'] = $this->M_model->select('galery', array('wisata_idwisata'=>$id, 'hotel_idhotel'=>NULL));
		$this->load->view('admin/edit/Paket', $data);
	}

	public function prosesEditPaket(){
    $this->load->model('M_model');
		$id = $this->input->post('idPaket');
		$data['idPaket']=$id;
		$data['nama_Paket']=$this->input->post('nama_Paket');
		$data['rating']=$this->input->post('rating');
		$data['deskripsi']=$this->input->post('deskripsi');
		$data['harga']=$this->input->post('harga');
		$this->M_model->update('Paket', $data, array('idPaket'=>$id));

		$config['upload_path']          = 'gallery/Paket';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']						= $id.$data['nama_Paket'];

		$this->load->library('upload', $config);
		if ( $this->upload->do_upload('gambar')){
						$data = $this->upload->data();
						$name_file=$data['file_name'];
						$gambar_data['gambar'] = $name_file;
						$gambar_data['Paket_idPaket'] = $id;
						$this->M_model->insert('galery', $gambar_data);
		}
		redirect(base_url('admin/Paket/editPaket/'.$id));
	}

	public function prosesHapusPaket(){
		$this->load->model('M_model');
		$id = $this->uri->segment(4);
		$deletebyidPaket = array('idPaket'=>$id);
		$deletebyidgambar = array('Paket_idPaket'=>$id);
		$this->M_model->delete($deletebyidgambar, 'galery');
		$this->M_model->delete($deletebyidPaket, 'Paket');
		return redirect(base_url('admin/Paket'));
	}

	public function prosesHapusGambar(){
		$this->load->model('M_model');
		$id = $this->uri->segment(4);
		$deletebyname = array('gambar'=>$id);
		// unlink(base_url().'gallery/Paket/'.$deletebyname);
		$this->M_model->delete($deletebyname, 'galery');
		return redirect(base_url('admin/Paket/'));
	}

	public function insertPaket(){
		$this->load->view('admin/insert/Paket');
	}

	public function prosesInsertPaket(){
		$this->load->model('M_model');
		$data['idPaket']=$id;
		$data['nama_Paket']=$this->input->post('nama_Paket');
		$data['rating']=$this->input->post('rating');
		$data['deskripsi']=$this->input->post('deskripsi');
		$data['harga']=$this->input->post('harga');
		$this->M_model->insert('Paket', $data);

		$config['upload_path']          = 'gallery/Paket';
		$config['allowed_types']        = 'gif|jpg|png';

		$this->load->library('upload', $config);
		if ( $this->upload->do_upload('gambar')){
						$data = $this->upload->data();
						$name_file=$data['file_name'];
						$gambar_data['gambar'] = $name_file;
						$id=$this->db->insert_id();
						$gambar_data['Paket_idPaket'] = $id;
						$this->M_model->insert('galery', $gambar_data);
		}
		redirect(base_url('admin/Paket'));
	}

	public function coba(){
		$this->load->view('admin/coba');
	}
}
