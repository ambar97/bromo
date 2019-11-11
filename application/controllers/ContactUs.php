<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUs extends CI_Controller {

	public function index()
	{
		$data['contact']=$this->M_model->select('contact');
		$this->load->view('user/v_contact',$data);
	}
	public function pesan(){
		$data=array('nama'=>$this->input->post('nama'),
					'email'=>$this->input->post('mail'),
					'title'=>$this->input->post('judul'),
					'isi'=>$this->input->post('isi'));
		$this->M_model->insert('message',$data);
		redirect(base_url('ContactUs'));
	}
}
