<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswaubg extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_mahasiswa');
	}




	public function ary()
	{
		$data['tabel'] = $this->M_mahasiswa->semuadata();
		// cek data
		// var_dump($data);
		// die();
		$this->load->view('mahasiswa_index', $data);
	}

	public function tambah()
	{
		$this->load->view('mahasiswa_tambah');
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

		redirect('mahasiswaubg/ary');


	}
}
