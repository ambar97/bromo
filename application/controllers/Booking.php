
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

		$data = array('id'=>$this->input->post('idwis'),
						'name'=>$this->input->post('nama'),
						'price'=>$this->input->post('harga'));
		// die(var_dump($data));
		$this->cart->insert($data);
		die(var_dump($this->cart->contents()));
		redirect(base_url('Booking/bookingW/'));
	}
}
