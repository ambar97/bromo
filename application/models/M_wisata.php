<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_wisata extends CI_Model {
public $tabel ="wisata";	

	public function pilihWisata(){
		return $this->db->get($this->tabel);
	}
	public function hapusWisata($where){
    $this->db->where($where);
    $this->db->delete('wisata');
	}
	public function hapusGalery($where){
    $this->db->where($where);
    $this->db->delete('galery');
	}
}