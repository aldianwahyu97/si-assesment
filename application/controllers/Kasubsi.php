<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasubsi extends CI_Controller {

	public function index()
	{
		$this->load->view('kasubsi/welcome_message');
	}

	public function laporan(){
		$this->load->view('kasubsi/laporan');
	}

	public function grafik(){
		$this->load->view('kasubsi/grafik');
	}

	public function verifikasi(){
		$this->load->view('kasubsi/verifikasi');
	}
}
