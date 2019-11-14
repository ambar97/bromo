<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
			$this->load->model("M_home");
	}

	public function index(){
		$data['paket']=$this->M_model->select('paket_wisata')->result();
		$data['wisata']=$this->M_model->select('wisata')->result();
		$data['slider']=$this->M_model->selectwhere('galery',array('tipe'=>'slider'));
		$this->load->view('user/v_home',$data);
	}
	public function hapusGal(){

	}
	public function profile(){
		$this->load->view('user/profile');
	}

	// public function tes(){
	// 	$data = '{
	// 		dajdha : tes
	// 	}';
	// 	$this->BCA("/df/invoice","POST",$data);
	// }
	public function bahasa(){
		$key = "AIzaSyCyr25D8TV_UCR-ZyusXon9D-BTYZeQwik";

		// membaca teks dari form
		$teks = urlencode("KAMU");

		// dari bahasa
		$dariBhs = "US";

		// ke bahasa
		$keBhs = "ID";

		// URL untuk mengakses Google API Translate
		$url = "https://www.googleapis.com/language/translate/v2?key=".$key."&q=".$teks."&source=".$dariBhs."&target=".$keBhs."&callback=response";
		// $fetch = file_get_contents($url);
		echo $url;
		// // mengambil data JSON yang terletak di dalam response(...)
		// $splits1 = explode("response(", $fetch);
		// $splits2 = explode(");", $splits1[1]);
		//
		// // mengekstrak data JSON
		// $hasil = json_decode($splits2[0], true);
		// echo $hasil;
		// mengambil teks hasil terjemahan dari data JSON
		// $translate = $hasil["data"]["translations"][0]["translatedText"];

	}

}
