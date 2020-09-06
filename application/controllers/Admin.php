<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->database();
		$this->load->model('admin_model');
		$this->load->model('first_model');			
	}
  
	// landing page after login (dashboard)
	public function index()
	{
		$page_data['page_type']    = "admin";
		$page_data['page_name']    = "dashboard";
		$page_data['page_title']   = 'Dashboard';
		$this->load->view('theme/main', $page_data);
	}

	
}
