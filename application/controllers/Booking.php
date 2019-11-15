
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
function __construct(){
	
		parent::__construct();
	}
public function bookingW(){
		$this->load->view('user/booking/single');
	}
	public function bookingST(){

		$data = array('idwisata'=>$this->input->post('idwis'),
						'namaW'=>$this->input->post('nama'),
						'harga'=>$this->input->post('harga'));
		// die(var_dump($data));
		$this->cart->insert($data);
		die(var_dump($this->cart->contents()));
		redirect(base_url('Booking/bookingW/'));
	}
}
