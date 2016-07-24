<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->helper('form');
		$this->load->model('siswa');
		$this->load->library('form_validation');
	}

	public function getIndex()
	{
		$data['siswa'] = $this->siswa->getSiswa();
		$this->load->view('templates/header');
		$this->load->view('crud/index', $data);
	}

	public function getCreate()
	{
		$this->load->view('templates/header');
		$this->load->view('crud/create');
	}

	public function postCreate()
	{
		$this->form_validation->set_rules('nis', 'NIS', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('kelas', 'Kelas', 'required');

		if ($this->form_validation->run() == FALSE) {
			redirect('get-create');
		} else {
			$this->siswa->postSiswa();
			redirect('/');
		}
	}

	public function getEdit($id)
	{
		echo $id;
	}

	public function postEdit($id)
	{
		# code...
	}

	public function getDelete($id)
	{
		$this->siswa->deleteSiswa($id);
		redirect('/');
	}
}
