<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kalapas extends CI_Controller {

	public function index()
	{
		$this->load->view('kalapas/welcome_message');
	}

	public function profile(){
		$this->load->view('kalapas/profile');
	}

	public function dataAssesor(){
		$this->load->view('kalapas/data_assesor');
	}

	public function dataTahanan(){
		$this->load->view('kalapas/data_tahanan');
	}

	public function laporan(){
		$this->load->view('kalapas/laporan');
	}

	public function grafik(){
		$this->load->view('kalapas/grafik');
	}
}
