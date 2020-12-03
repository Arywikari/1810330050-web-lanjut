<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controllera extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Amodel');
	}

	public function index()
	{
		$data['tabel'] = $this->Amodel->semuadata();


		$this->load->view('uts/v_index', $data);
	}

	public function tambah()
	{
		$this->load->view('uts/v_tambah');
	}

	public function proses_tambah()
	{
		//var_dump($this->input->post());
		$data = [
			'jurusan' => $this->input->post('txtjurusan'),
			'kelas' => $this->input->post('txtkelas'),
			'isi' => $this->input->post('txtisi')
		];

		$this->Amodel->simpandata($data);

		redirect('controllera/index');


	}
}