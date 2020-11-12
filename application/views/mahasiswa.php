<!DOCTYPE html>
<html>
<head>
	<title> Data Mahasiswa </title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #3175bf">
		<a href="" class="navbar-brand">
			Tugas
		</a>
		<div class="navbar-nav">
			<a href="" class="nav-link active">Home</a>
			<a href="" class="nav-link">Tambah Data</a>
		</div>
	</nav>

		<div class="alert alert-success text-center">
			Data Mahasiswa
		</div>


	<table class="table table-bordered table-sm">
		<tr>
			<th>No</th>
			<th>Nim</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
		<tr>
			<td>1</td>
			<td>1810330050</td>
			<td>Ary</td>
			<td>Sumbawa</td>
			<td>
				<a href="" class="btn btn-info btn-sm">Edit</a>
				<a href="" class="btn btn-danger btn-sm">Hapus</a>
			</td>
		</tr>
	</table>
</body>
</html>