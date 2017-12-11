<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class test extends CI_Controller {

	public function index()
	{
		$list= array ('red','blue','pink','green','yellow');
		$this->load->helper('html');
		echo heading('Hello world',1);
		echo ul($list);
		echo br(3);
		echo img('asset/img/Tulips.jpg');
	}
	public function coba()
	{
		echo "Silahkan coba lagi";
	}
}
