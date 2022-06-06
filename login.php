<?php 
include "./connection.php";

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($con, "select * from credentials where username='$username' and password='$password'");
$cek = mysqli_num_rows($query);
echo $cek;

if($cek > 0){
	$data = mysqli_fetch_assoc($query);

	if($data['level']=='admin'){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = 'admin';

		header("location:dashboard_admin.php"); 
	}else if($data['level'] == 'user'){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = 'user';

		header('location:dashboard_user.php');
	}else{
		header('location:index_login.php?pesan=gagal');
	}
}else{
	header('location:index_login.php?pesan=gagal');
}
?>