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
	public function tambahData($data){
		$this->db->insert('wisata',$data);
	}
	public function tambahDataGambar($data){
		$this->db->insert('galery',$data);
	}
	public function pilihWisatawhere(){
		return $this->db->get_where('wisata', array('idwisata'=>$this->uri->segment(4)));
	}
	public function perbarui($data,$where){
		$this->db->update('wisata',$data,$where);
	}
	public function pilihWisataAll(){
		$this->db->select('wisata.*, galery.*');
          $this->db->from('wisata');
          $this->db->join('galery', 'wisata.idwisata = galery.wisata_idwisata');
          // $this->db->where('mobil.id_automobile', '4');
          $data=$this->db->get();
          return $data;
	}
}