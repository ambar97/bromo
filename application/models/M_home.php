<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_home extends CI_Model {

  public function countRowDestination(){
    $this->db->from('wisata');
    return $this->db->count_all_results();
  }
  

}
