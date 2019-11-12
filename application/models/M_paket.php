<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_paket extends CI_Model {

  public function selectlimit($table){
    $this->db->where(array('wisata_idwisata'=>NULL));
    $this->db->order_by('paket_idpaket','DESC');
    $this->db->limit(1);
    return $this->db->get($table) ;
  }
}
