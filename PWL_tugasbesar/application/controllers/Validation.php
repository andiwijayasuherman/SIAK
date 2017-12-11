<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Validation extends CI_Controller{

	public function index(){
		$this->form_validation->set_rules('nama','Nama Mahasiswa','required');
		$this->form_validation->set_rules('nim','NIM','required|callback_check_nim');
		$this->form_validation->set_rules('ipk','IPK','required|callback_check_ipk');

		if($this->form_validation->run() == FALSE){
			$this->load->view('header');
			$this->load->view('form-validation');
			$this->load->view('footer');
		} else {
			$data['post']=$this->input->post();

			$this->load->view('header');
			$this->load->view('success', $data);
			$this->load->view('footer');
		}
	}
	function check_nim($npm){
	if ((strlen($npm)==10)&&(stristr($npm,'5520114')==$npm)){
		return TRUE;
	} else{
	$this->form_validation->set_message('check_nim','Kolom NIM format penulisan nim salah');
			return FALSE;
	}
}
	function check_ipk($nilai_ipk){
		if(!$nilai_ipk){
			$nilai_ipk=0;}
	if ((number_format($nilai_ipk,'2','.',',')==$nilai_ipk)&&($nilai_ipk<=4)&&($nilai_ipk>0)){
		return TRUE;
	} else{
	$this->form_validation->set_message('check_ipk','Kolom IPK format penulisan ipk salah');
			return FALSE;
	}
}
}