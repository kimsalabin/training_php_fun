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

	if (removeMhs($id)) {
		echo "Berhasil dihapus";
		header("Location: index.php");
	}else{
		echo "Gagal dihapus";
		header("Location: index.php");
	}
?>