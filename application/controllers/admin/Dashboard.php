<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_wisata');
		$this->load->library('upload');
	}
	public function index()
	{
		$this->load->view('admin/v_dashboard');
	}
	public function profile(){
		$this->load->view('admin/v_profile');
	}
	public function home(){
		$data['slider']=$this->M_model->selectwhere('galery',array('tipe'=>'slider'));
		$this->load->view('admin/home',$data);
	}
	public function insertSlider(){
		$config = array('upload_path' => './gallery/slider/',
				'allowed_types' => 'gif|jpg|png|jpeg'
			);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('ght')){
				$upload_data = $this->upload->data ();
				$foto = "gallery/slider/".$upload_data['file_name'];
				$data = array('gambar' =>$foto ,
						'deskripsi'=>$this->input->post('judul'),
						'tag'=>$this->input->post('isi'),
						'tipe'=>'slider');
				$data = $this->M_model->insert('galery',$data);
				redirect(base_url('admin/Dashboard/home'));
			}else{
				echo "ghghgh";
			}
	}
	public function hapusGal($id){
		$where = array('idgalery'=>$id);
		$this->M_wisata->hapusGalery($where);

		redirect(base_url('admin/Dashboard/home'));
	}
}
