<?php 
	session_start();
	if (!isset($_SESSION['logged'])) {
		header("Location:login.php");
	}
	require 'db.php';
	$mhs = getMhs("select * from mahasiswa");
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
			<h1>Data Mahasiswa</h1>
			<h2>Welcome <?= $_SESSION['username'] ?></h2>
			<table class="table table-bordered">
				<thead>
					<tr>
						<td>No</td>
						<td>Nama</td>
						<td>NIM</td>
						<td>Email</td>
						<td>Aksi</td>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($mhs as $key => $m) { ?>
					<tr>
						<td><?= $key+1 ?></td>
						<td><?= $m['nama'] ?></td>
						<td><?= $m['nim'] ?></td>
						<td><?= $m['email'] ?></td>
						<td><a href="edit.php?id=<?= $m['id'] ?>">Ubah</a> | <a href="delete.php?id=<?= $m['id'] ?>">Hapus</a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<a href="add.php">Tambah</a> | <a href="logout.php">Logout</a>
		</div>
	</body>
</html>