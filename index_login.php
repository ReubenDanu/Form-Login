<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>

	<div class="kotak_login">
		<h3 class="tulisan_login">Login Form</h3>
		<form action="login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Enter Your Username" required>
			<label>Password</label>
			<input type="Password" name="password" class="form_login" placeholder="Enter Your Password" required>
			<input type="submit" name="login" class="tombol_login" value="Submit">
			<center class="register_part">Don't have an Account? <br><a href="register.php">Register</a> Now!</center>
		</form></div>
</body>
</html>