 <?php
$con = mysqli_connect("localhost","root","","formlogin", 3308);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT username, password FROM credentials";
$result = mysqli_query($con, $sql);

// Associative array
$row = mysqli_fetch_assoc($result);
printf ("%s (%s)\n", $row["username"], $row["password"]);

// Free result set
mysqli_free_result($result);

mysqli_close($con);
?> 