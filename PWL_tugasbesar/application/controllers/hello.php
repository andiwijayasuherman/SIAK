<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hello extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('tampil');
		$this->load->view('modal-delivery');
		$this->load->view('footer');
	}

}
