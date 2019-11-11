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
		$data['hotel']=$this->M_model->selectwhere('hotel', array('idHotel'=>$id));

		$config['upload_path']          = base_url('gallery/hotel');
		$config['allowed_types']        = 'gif|jpg|png';

		$this->load->library('upload', $config);

		if ( $this->upload->do_upload(''))
		{
						$data = $this->upload->data();
						$name_file=$data['file_name'];
						$update_data['gambar_mobil'] = $name_file;
						$id_mobil=$this->input->post('id_mobil');
						$this->suzuki_model->update('mobil', $update_data, array('id_mobil'=>$id_mobil));
						header('location:'.base_url('admin/Product/editData/'.$id_mobil));
		}

		$this->load->view('admin/edit/hotel', $data);
	}

	public function coba(){
		$this->load->view('admin/coba');
	}
}
