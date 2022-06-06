<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Page</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
	<div class="kotak_login">
		<h3 class="tulisan_login">Register</h3>
		<form action="register.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Enter Your Username" required>
			<label>Password</label>
			<input type="Password" name="password" class="form_login" placeholder="Enter Your Password" required>
			<label>Email</label>
			<input type="email" name="email" class="form_login" placeholder="Enter Your Email" required>
			<input type="submit" name="login" class="tombol_login" value="Create Account">
			<center class="register_part">Already have an Account? <br><a href="login.php">Log in</a></center>
		</form></div>
</body>
</html>