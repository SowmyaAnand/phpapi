<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->database();
		$this->load->model('first_model');
		$this->load->model('notification_model');

	}
	//to load questionnaire page
	public function index()
	{
		$this->load->view('landing');
	}
	
}
