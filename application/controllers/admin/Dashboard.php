<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/v_dashboard');
	}
	public function profile(){
		$this->load->view('admin/v_profile');
	}
}
