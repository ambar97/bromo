
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
function __construct(){

		parent::__construct();
	}
public function bookingW(){

	// die(var_dump($this->cart->contents()));
		$this->load->view('user/booking/single');
	}
	public function destroycart(){
		$this->cart->destroy();
	}

	public function hapusCart($rowid){
		$data = array('rowid' => $rowid,
                              'qty' => 0);
		$this->cart->update($data);
		redirect(base_url('Booking/bookingW'));
	}
	public function bookingST(){

		$dataaa = $this->input->post('idwis');
		$usd['data']= $this->cart->contents();
		// $this->cart->destroy();
		if ($usd['id'] == $dataaa ) {
			redirect(base_url('Booking/bookingW/'));
		} else {
			$data = array('id'      => $this->input->post('idwis'),
	                'qty'     => 1,
	                'price'   => $this->input->post('harga'),
	                'name'    => $this->input->post('nama'),
	                'gambar' =>  $this->input->post('foto'));
									$this->cart->insert($data);
									redirect(base_url('Booking/bookingW/'));
		}




	}
}
