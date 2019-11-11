<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$data['pro']=$this->M_model->select('contact');
		$this->load->view('admin/v_contactus',$data);
	}

	public function update(){
		$where=array('idcontact'=>$this->input->post('id'));
		$data=array('judul'=>$this->input->post('judul'),
					'isi'=>$this->input->post('isi'),
					'noWa'=>$this->input->post('wa'),
					'email'=>$this->input->post('email'),
					'noTelp'=>$this->input->post('telp'),
					'idWchat'=>$this->input->post('wchat'),
					'idLine'=>$this->input->post('line'),
					'facebook'=>$this->input->post('fb'),
					'ig'=>$this->input->post('ig'),
					'redirectFb'=>$this->input->post(''),
					'redirectIg'=>$this->input->post(''),
					'alamat'=>$this->input->post('alamat'));
		$this->M_model->update('contact',$data,$where);
		redirect(base_url('admin/Contact'));
	}
}
