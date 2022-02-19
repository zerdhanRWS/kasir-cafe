<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			//pengecekan sesi
			if($this->session->userdata('is_login') != true){
				redirect('Auth');	
			}

	}
	public function index()
	{
		$this->load->view('Dashboard');
	}

}
