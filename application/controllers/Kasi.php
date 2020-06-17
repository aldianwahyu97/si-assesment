<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasi extends CI_Controller {

	public function index()
	{
		$this->load->view('kasi/welcome_message');
	}

	public function laporan(){
		$this->load->view('kasi/laporan');
	}

	public function grafik(){
		$this->load->view('kasi/grafik');
	}
}
