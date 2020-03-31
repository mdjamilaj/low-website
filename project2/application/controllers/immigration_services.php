<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class immigration_services extends CI_Controller {

	public function in()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/setup/immigration_services/index');
		$this->load->view('admin/include/footer');
    }

    public function i1n()
	{
		$this->load->view('admin/include/header');
		$this->load->view('admin/setup/immigration_services/index');
		$this->load->view('admin/include/footer');
	}
}
