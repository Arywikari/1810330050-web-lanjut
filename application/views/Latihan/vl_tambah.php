<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css');?>">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark shodow bg-primary"
	 style="background-color: #3175bf">
		<a href="#" class="navbar-brand">Tugas</a>

		<div class="navbar-nav">
			<a href="<?= site_url('latihan/index')?>" class="nav-link active">Home</a>
			<a href="<?= site_url('latihan/tambah')?>" class="nav-link">Tambah Data</a>
		</div>

		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link active">Ary Wikari</a>
		</div>
	</nav>

	<div class="alert-success text-center mt-2">
		Tambah Data Mahasiswa
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header"> Form Data Mahasiswa </div>
						<form action="<?= site_url('latihan/proses_tambah') ?>" method="post">
							<div class="form-group">
								<label for = "">NIM</label>
									<input type="text" class="form-control" name="txtnim">
								</div>
								<div class="form-group">
									<label for = "">Nama</label>
										<input type="text" class="form-control" name="txtnama">
								</div>
								<div class="form-group">
									<label for = "">Alamat</label>
										<textarea name="txtalamat" cols="30"
										class="form-control" rows="3"></textarea>
								</div>
								<input type="submit" name="submit" value="simpan" class="btn btn-primary">
								<a href="<?= site_url('latihan/index')?>" class="btn btn-warning">Batal</a>
							</form>
						</div>
					</div>
				</div>
			</div>
</body>
</html>