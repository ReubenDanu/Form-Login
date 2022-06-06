<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Dashboard</title>
</head>
<body>
	<?php 

	session_start();

	if($_SESSION['level']== ''){
		header('location:index_login.php?pesan=gagal');
	}
	?>

	<h1>Halaman User</h1>

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php">LOGOUT</a>
	
</body>
</html>