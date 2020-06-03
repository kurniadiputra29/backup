<?php
session_start(); // untuk pendaftaran session
include 'koneksi.php';
$email = $_POST['email'];
$password	= $_POST['password'];

if (!empty($email) && !empty($password)) {
	$sql = "SELECT * FROM user WHERE email = '$email' AND pasword = '$password'";
	$query = mysqli_query($koneksi, $sql);
	$row = mysqli_fetch_assoc($query);
	if (mysqli_num_rows($query) > 0) {
		$_SESSION['email'] = $email;
		$_SESSION['name'] = $row['name'];
		$_SESSION['foto'] = $row['foto'];
		$_SESSION['id'] = $row['id'];
			header("location: ../admin/index.php");
		} else {
			echo "Email atau Password anda salah";
	}
} else {
	echo "Email atau Password anda salah";
}
?>