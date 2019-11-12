<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galery extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_wisata');
		$this->load->library('upload');
	}
	public function index()
	{
		$data['gal']= $this->M_model->selectwhere('galery',array('wisata_idwisata'=> NULL,
			'hotel_idhotel'=> NULL));
		$this->load->view('admin/v_galery',$data);
	}
	public function tamfoto(){
		$config = array('upload_path' => './gallery/galeri/',
				'allowed_types' => 'gif|jpg|png|jpeg'
			);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('ght')){
				$upload_data = $this->upload->data ();
				$foto = "gallery/galeri/".$upload_data['file_name'];
				$data = array('deskripsi' =>$this->input->post('desk') ,
							'gambar'=>$foto);
				$data = $this->M_model->insert('galery',$data);
				redirect(base_url('admin/Galery'));
			}else{
				echo "ghghgh";
			}
	}
	public function hapusGambar($id){
		$where = array('idgalery'=>$id);
		$this->M_wisata->hapusGalery($where);

		redirect(base_url('admin/Galery'));
	}
}
