<?php 
	$db = mysqli_connect("localhost","root","","training_php_fun");
	if (mysqli_connect_errno()){
		echo "Koneksi database gagal : " . mysqli_connect_error();
		die;
	}


	function login($data='')
	{
		global $db;
		$query = "SELECT * FROM user WHERE username = '{$data['username']}' AND password = '{$data['password']}'";
		$result = mysqli_query($db,$query);


		if ($result) {
			$return = mysqli_fetch_assoc($result);
			return $return;
		}else{
			return false;
		}
		
	}

	function getMhs($query='')
	{
		global $db;

		$result = mysqli_query($db,$query);
		$data=[];
		while ( $row = mysqli_fetch_assoc($result) ) {
			$data[]=$row;
		}

		return $data;
	}

	function addMhs($data='')
	{
		global $db;
		$nim = htmlspecialchars($data['nim']);
		$nama = htmlspecialchars($data['nama']);
		$email = htmlspecialchars($data['email']);

		$result = mysqli_query($db,"INSERT INTO mahasiswa VALUES('','$nama','$email','$nim')");

		if ( mysqli_affected_rows($db) > 0 ) {
			return true;
		}else{
			return false;
		}
	}

	function editMhs($data='')
	{
		global $db;
		$id =  htmlspecialchars($data['id']);
		$nim = htmlspecialchars($data['nim']);
		$nama = htmlspecialchars($data['nama']);
		$email = htmlspecialchars($data['email']);

		$result = mysqli_query($db,"UPDATE mahasiswa SET nim = '$nim',nama = '$nama', email = '$email' WHERE id='$id'");

		if ( mysqli_affected_rows($db) > 0 ) {
			return true;
		}else{
			return false;
		}
	}

	function removeMhs($id='')
	{
		global $db;
		if (!$id) {
			return false;
		}

		$result = mysqli_query($db,"DELETE FROM mahasiswa WHERE id = '$id'");

		if ( mysqli_affected_rows($db) > 0 ) {
			return true;
		}else{
			return false;
		}
	}
?>