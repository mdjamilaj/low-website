<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class site extends CI_Controller {

	
	function __construct()
	{
	  parent::__construct();
	  $this->load->library('ion_auth');
	  if (!$this->ion_auth->logged_in())
	  {
		//redirect them to the login page
		redirect('site', 'refresh');
	  }
	  $this->data['page_title'] = 'CI App - Dashboard';
	}
	protected function render($the_view = NULL, $template = 'admin_master')
	{
	  parent::render($the_view, $template);
	}

	
	public function index()
	{
		// $this->data['identity'] = array('name' => 'identity',
		// 		'id'    => 'identity',
		// 		'type'  => 'text',
		// 		'value' => $this->form_validation->set_value('identity'),
		// 	);
		// 	$this->data['password'] = array('name' => 'password',
		// 		'id'   => 'password',
		// 		'type' => 'password',
		// 	);

		// $this->load->view('admin/setup/login', $this->data);
	}


		public function login()
		{
		$this->data['page_title'] = 'Login';
		if($this->input->post())
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('identity', 'Identity', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('remember','Remember me','integer');
			if($this->form_validation->run()===TRUE)
			{
			$remember = (bool) $this->input->post('remember');
			if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember))
			{
				redirect('admin', 'refresh');
			}
			else
			{
				$this->session->set_flashdata('message',$this->ion_auth->errors());
				redirect('admin/user/login', 'refresh');
			}
			}
		}
		$this->load->helper('form');
		$this->render('admin/setup/login','admin_master');
		}



		public function logout()
		{
		  $this->ion_auth->logout();
		  redirect('admin/user/login', 'refresh');
		}

	// public function home()
	// {
	// 	$email = $this->input->post('email');
	// 	$password = $this->input->post('password');

	// 	$query =$this->db->query("SELECT * FROM `login` WHERE `email`='$email' AND `password`=md5('$password')");
	// 	if($query->num_rows() < 1){
	// 		$this->session->set_flashdata('msg', 'Incorrect email or password !!');
	// 		redirect('site');
	// 	}else{





	// 	  echo "false";
	// 	}

		// $this->load->view('admin/setup/include/header');
		// // $this->load->view('admim/setup/include/header');
		// $this->load->view('admin/setup/include/footer');
	// }




	public function _render_page($view, $data=null, $returnhtml=false)//I think this makes more sense
	{

		$this->viewdata = (empty($data)) ? $this->data: $data;

		$view_html = $this->load->view($view, $this->viewdata, $returnhtml);

		if ($returnhtml) return $view_html;//This will return html on 3rd argument being true
	}

}
