<?php

class M_latihan extends CI_Model
{
	private $tabel ='mahasiswa';

	public function semuadata()
	{
		// select*from mahasiswa
		// mysqli_fetch_object()
		return $this->db->get($this->tabel)->result();
	}

	public function simpandata($data)
	{
		// insert into mahasiswa value ();
		$this->db->insert($this->tabel, $data);

	}
}

// model itu berisi kode kode yang biasanya berhubungan langsung dengan database untuk memanipulasi data seperti insert update delete search, menangani validasi dari bagian controller namun tidak dapat berhubungan langsung dengan view / menangani interaksi dengan database
// view berisi kode kode untuk tampilan atau bisa dikatakan halaman yang kita buat / penyajian data kepada user / mempresentasikan data kepada user
//controller adalah bagian yang mengatur hubungan antara model dan view, berfungsi menerima request dan data dari user kemudian menentukan apa yang akan di proses oleh aplikasi,tugas lainnya adalah menyediakan berbagai variabel yang akan ditampilkan di view, memanggil model untuk melakukan akses kedatabase