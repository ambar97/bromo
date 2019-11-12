<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**

	* @author Fendrik Nurul Jadid <fendrik1311@gmail.com>

	* @since v.1.0

	**/


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

}
