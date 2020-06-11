<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assesor extends CI_Controller {

	public function index()
	{
		$this->load->view('assesor/welcome_message');
	}

	public function assesment()
	{
		$this->load->view('assesor/assesment');
	}

	public function assesment_form()
	{
		$this->load->view('assesor/assesment_form');
	}

	public function assesment_result()
	{
		$this->load->view('assesor/assesment_result');
	}

	public function laporan(){
		$this->load->view('assesor/laporan');
	}

	public function grafik(){
		$this->load->view('assesor/grafik');
	}
}
