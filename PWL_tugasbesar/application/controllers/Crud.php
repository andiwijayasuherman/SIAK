<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

/**
* 
*/
class Crud extends CI_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->model('m_database');
	}

	function index(){
		$data['mahasiswa'] = $this->m_database->select();
		$this->load->view('header');
		$this->load->view('tampil-mahasiswa', $data);
		$this->load->view('modal');
		$this->load->view('footer');
	}

	function insert_data(){
		$data = array(
			'nim' => $this->input->post('nim'),
			'nama' => $this->input->post('nama'),
			'password' => md5 ($this->input->post('pass')),
			'kelas' => $this->input->post('kelas')
			);
		$this->m_database->insert($data);
		redirect('crud','refresh');
	}

	function edit_data(){
		$id = $this->input->post('id');

		if($this->input->post('pass') == null){
			$data = array(
			'nim' => $this->input->post('nim'),
			'nama' => $this->input->post('nama'),
			'kelas' => $this->input->post('kelas')
			);
		} else {
			$data = array(
			'nim' => $this->input->post('nim'),
			'nama' => $this->input->post('nama'),
			'password' => md5($this->input->post('pass')),
			'kelas' => $this->input->post('kelas')
			);
		}

		$where = array('id' => $id);
		$this->m_database->update($data, $where);

		redirect('crud','refresh');
	}

	function delete_data(){
		$id = $this->input->post('id');
		$where = array('id' => $id);
		$this->m_database->delete($where);
		redirect('crud','refresh');
	}
}