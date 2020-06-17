<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$this->load->view('admin/welcome_message');
	}

	public function dataUser()
	{
		$this->load->view('admin/data_user');
	}

	public function dataTahanan(){
		$this->load->view('admin/data_tahanan');
	}
}
