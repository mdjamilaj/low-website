<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/setup/home');
		$this->load->view('admin/include/footer');
	}
}
