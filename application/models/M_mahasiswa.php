<?php

class M_mahasiswa extends CI_Model
{
	private $tabel ='mahasiswa';

	public function semuadata()
	{
		// select*from mahasiswa
		// mysqli_fetch_object()
		return $this->db->get($this->tabel)->result();
	}
}