<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Form extends CI_Controller
{
	
	public function index()
	{
		$data = array (
			'username' => array (
				'name' => 'username',
				'type' => 'text',
				'class' => 'form-conrol',
				'placeholder' => 'Username'
				),
			'password' => array (
				'name' => 'username',
				'type' => 'text',
				'class' => 'form-conrol',
				'placeholder' => 'Username'
				),
			'address' => array (
				'name' => 'address',
				'rows' => '4',
				'cols' => '25',
				'class' => 'form-conrol',
				'placeholder' => 'Username'
				),
			'option' => array (
				'A' => 'Bloods Type A',
				'B' => 'Bloods Type B',
				'AB' => 'Bloods Type AB',
				'O' => 'Bloods Type O'
				),
			'radio' => array (
				'male' => array(
					'name' => 'gender',
					'Value' => 'Male'
					),
				'female' => array(
					'name' => 'gender',
					'Value' => 'Female'
					)
				),
			);
		$this->load->view('header');
		$this->load->view('form', $data);
		$this->load->view('footer');
	}
	function getPost(){
		$check=array('username','password','address','blood','gender');
		$data['post']= $this->input->post($check);
		$this->load->view('formPost', $data);
	}
}
?>