<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {

	public function index(){
		$this->load->model('M_model');
		$data['hotel']=$this->M_model->select('hotel');
		$this->load->view('admin/v_hotel', $data);
	}

	public function editHotel(){
		$this->load->model('M_model');
		$id = $this->uri->segment(4);
		$data['hotel'] = $this->M_model->select('hotel', array('idhotel'=>$id));
		$this->load->view('admin/edit/hotel', $data);
	}

	public function prosesEditHotel(){
    $this->load->model('M_model');
		$id = $this->input->post('idhotel');
		// $data['idhotel']=$id;
		// $data['nama_hotel']=$this->input->post('nama_hotel');
		// $data['rating']=$this->input->post('rating');
		// $data['deskripsi']=$this->input->post('deskripsi');
		// $data['harga']=$this->input->post('harga');
		// $this->M_model->update('hotel', $data, array('idhotel'=>$id));
		//
		// $config['upload_path']          = 'gallery/hotel';
		// $config['allowed_types']        = 'gif|jpg|png';
		//
		// // $this->upload->initialize($config);
		// $this->load->library('upload', $config);
		// if ($this->upload->do_upload('gambar')){
		// 				$data = $this->upload->data();
		// 				$name_file=$data['file_name'];
		// 				$gambar_data['gambar'] = $name_file;
		// 				$gambar_data['hotel_idhotel'] = $id;
		// 				$this->M_model->insert('galery', $gambar_data);
		// }
		// redirect(base_url('admin/Hotel/editHotel/'.$id));

		$config['upload_path']          = './gallery/hotel/';
		$config['allowed_types']        = 'gif|jpg|png';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambar'))
		{
		      $error = array('error' => $this->upload->display_errors());

		      $this->load->view('upload_form', $error);
		}
		else
		{
		      // $data = array('upload_data' => $this->upload->data());
					//
		      // $this->load->view('upload_success', $data);
					$data = $this->upload->data();
					$name_file=$data['file_name'];
					$gambar_data['gambar'] = $name_file;
					$gambar_data['hotel_idhotel'] = $id;
					$this->M_model->insert('galery', $gambar_data);
					redirect(base_url('admin/Hotel/editHotel/'.$id));
		}
	}

	public function coba(){
		$this->load->view('admin/coba');
	}
}
