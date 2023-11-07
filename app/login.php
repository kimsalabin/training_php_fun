<?php
	require 'db.php';
	session_start();
	if (isset($_SESSION['logged'])) {
		header("Location:index.php");
	}

	if (($username = $_POST['username'] ?? null) && $password = $_POST['password'] ?? null) {
		
		$data = [
			'username'=>$username,
			'password'=>md5($password)
		];

		
		if ($login = login($data)) {
			$_SESSION['logged'] = true;
			$_SESSION['username'] = $login['username'];

			header("Location: index.php");
		}else{
			echo "Error : Username dan Password tidak sesuai.";
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="col-6">
			<form method="post">
				<label>Username</label>
				<input type="text" name="username" class="form-control" required value="<?= $username ?? null ?>">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required value="<?= $password ?? null ?>">
				<button type="submit" class="btn btn-primary mt-2">Masuk</button>
			</form>
		</div>
	</div>
</body>
</html>