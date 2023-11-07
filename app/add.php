<?php 
	session_start();
	if (!isset($_SESSION['logged'])) {
		header("Location:login.php");
	}
	include "db.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>PHP Fundamental Training</title>
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container-fluid">
			<div class="col-6">
				<h1>Tambah Data</h1>
				<?php 
					if (isset($_POST['nama'])) {
						$data['nama'] = $_POST['nama'];
						$data['nim'] = $_POST['nim'];
						$data['email'] = $_POST['email'];
						
						if (addMhs($data)) {
							echo "Data berhasil ditambahkan";
							header("Location: index.php");
						}else{
							echo "Gagal menambahkan data. Error : ".mysqli_error($db);
							header("Location: index.php");
						}
					}
				?>
				<form method="post">
					<label>Nama : </label>
					<input type="text" name="nama" class="form-control" required>
					<label>NIM : </label>
					<input type="text" name="nim" class="form-control" required>
					<label>Email : </label>
					<input type="text" name="email" class="form-control" required>
					<button type="submit" class="btn btn-primary mt-2">Tambah</button>
					<a href="index.php" class="btn btn-secondary mt-2">Kembali</a>
				</form>
			</div>
		</div>
	</body>
</html>