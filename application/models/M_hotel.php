<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hotel extends CI_Model {

  public function selectlimit($id){
    $this->db->where(array('wisata_idwisata'=>NULL, 'paket_idpaket'=>NULL, 'hotel_idhotel'=>$id));
    $this->db->order_by('hotel_idhotel','DESC');
    $this->db->limit(1);
    return $this->db->get('galery') ;
  }

  public function editFasilitas($id){
    $this->db->select('daftar_fasilitas.*, fasilitas.*');
    $this->db->from('daftar_fasilitas');
    $this->db->join('fasilitas', 'daftar_fasilitas.icon = fasilitas.icon');
    $this->db->where('fasilitas.id_hotel', $id);
    $data=$this->db->get();
    return $data;
  }

  // public function userHotel(){
  //   $this->db->select('hotel.*, galery.*');
  //   $this->db->from('hotel');
  //   $this->db->join('galery', 'hotel.idhotel = galery.hotel_idhotel');
  //   $this->db->order_by('hotel_idhotel','DESC');
  //   $this->db->limit(1);
  //   $data=$this->db->get();
  //   return $data;
  // }
}
