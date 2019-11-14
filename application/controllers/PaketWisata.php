<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaketWisata extends CI_Controller {

	public function index(){
		$this->load->model('M_model');
		$data['paket'] = $this->M_model->select('paket_wisata');
		$this->load->view('user/v_paket', $data);
	}

	public function detailPaket(){
		$this->load->model('M_model');
		$this->load->model('M_paket');
		$id = $this->uri->segment(3);
		$data['gambar'] = $this->M_model->selectwhere('galery', array('paket_idpaket'=>$id, 'wisata_idwisata'=>NULL, 'hotel_idhotel'=>NULL));
		$data['paket'] = $this->M_model->selectwhere('paket_wisata', array('idpaket_wisata'=>$id));
		$this->load->view('user/v_detailpaket', $data);
	}
	public function bookingP(){
		$this->load->view('user/booking/paket');
	}

	public function gagal(){
		$id = $this->uri->segment(3);
		$data['detail'] = $this->M_model->selectwhere('paket_wisata',array('idpaket_wisata'=>$id));
		$this->load->view('user/gagal/gagal',$data);	
	}


	public function loginYa(){
		$id = $this->input->post('idP');
		$where = array('username' =>$this->input->post('username'),
						'password'=>md5($this->input->post('password')));
		$cek = $this->M_model->cek_login("users",$where)->num_rows();
		$cek1 = $this->M_model->cek_login("users",$where)->row();
		if($cek > 0){
			$data_session = array(
				'id' => $cek1->idusers,
				'nama'=>$cek1->nama,
				'status' => "loginUser"
				);
			$this->session->set_userdata($data_session);
			redirect(base_url("PaketWisata/bookingP/".$id));
		}else{
			redirect(base_url("PaketWisata/gagal/".$id));
		}
	}
}
