<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	function index(){
		$user_akun = $this->m_login->ambil_user($this->session->userdata('username'));
		$session = $this->session->userdata('login_in');
		$data['user'] = $user_akun;

		if($session == TRUE){
			$this->load->view('header');
			$this->load->view('session-login', $data);
			$this->load->view('footer');
		} else{
			redirect('seesion','refresh');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('session','refresh');
	}

}