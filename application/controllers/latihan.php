<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class latihan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_mahasiswa');
	}




	public function index()
	{
		$data['tabel'] = $this->M_mahasiswa->semuadata();
		// cek data
		// var_dump($data);
		// die();
		$this->load->view('latihan/vl_index', $data);
	}

	public function tambah()
	{
		$this->load->view('latihan/vl_tambah');
	}

	public function proses_tambah()
	{
		// var_dump($this->input->post());
		$data = [
			'nim' => $this->input->post('txtnim'),
			'nama' => $this->input->post('txtnama'),
			'alamat' => $this->input->post('txtalamat')
		];

		$this->M_mahasiswa->simpandata($data);

		redirect('latihan/index');


	}
}
