<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    //Codeigniter : Write Less Do More
			$this->load->model("M_home");
	}

	public function index()
	{
		
		$this->load->view('user/v_home');
	}
	public function profile(){
		$this->load->view('user/profile');
	}

}
