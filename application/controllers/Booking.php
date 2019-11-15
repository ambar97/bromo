
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
function __construct(){

		parent::__construct();
	}
public function bookingW(){
		$this->load->view('user/booking/single');
	}
	public function destroycart(){
		$this->cart->destroy();
	}

	public function hapusCart($rowid){
		$data = array('id' => $rowid,
                              'qty' => 0);
		$this->cart->update($data);
		die(var_dump($this->cart->contents()));
		redirect(base_url('Booking/bookingW'));
	}
	public function bookingST(){
		$data = array('id'      => $this->input->post('idwis'),
                'qty'     => 1,
                'price'   => $this->input->post('harga'),
                'name'    => $this->input->post('nama'),
                'gambar' =>  $this->input->post('foto'));
		$this->cart->insert($data);
		// $this->cart->destroy();
		// die(var_dump($this->cart->contents()));
		redirect(base_url('Booking/bookingW/'));
	}
}
