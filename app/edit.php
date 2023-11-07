<?php 
	session_start();
	if (!isset($_SESSION['logged'])) {
		header("Location:login.php");
	}
	require 'db.php';
	$id = $_GET['id'] ?? null;
	if (!$id) {
		header("Location: index.php");
	}

	$data = getMhs("select * from mahasiswa where id = '$id'")[0] ?? null;
	if (!$data) {
		header("Location: index.php");
	}
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
					if (isset($_POST['id'])) {
						$edit['id'] = $_POST['id'];
						$edit['nama'] = $_POST['nama'];
						$edit['nim'] = $_POST['nim'];
						$edit['email'] = $_POST['email'];
						
						if (editMhs($edit)) {
							echo "Data berhasil diubah";
							header("Location: index.php");
						}else{
							echo "Gagal mengubah data. Error : ".mysqli_error($db);
							header("Location: index.php");
						}
					}
				?>
				<form method="post">
					<input type="hidden" name="id" class="form-control" required value="<?= $data['id'] ?>">
					<label>Nama : </label>
					<input type="text" name="nama" class="form-control" required value="<?= $data['nama'] ?>">
					<label>NIM : </label>
					<input type="text" name="nim" class="form-control" required value="<?= $data['nim'] ?>">
					<label>Email : </label>
					<input type="text" name="email" class="form-control" required value="<?= $data['email'] ?>">
					<button type="submit" class="btn btn-primary mt-2">Ubah</button>
					<a href="index.php" class="btn btn-secondary mt-2">Kembali</a>
				</form>
			</div>
		</div>
	</body>
</html>