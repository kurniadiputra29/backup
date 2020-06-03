<?php
session_start(); // untuk pendaftaran session
include 'koneksi.php';
$email = $_POST['email'];
$password	= $_POST['password'];

if (!empty($email) && !empty($password)) {
	$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
	$query = mysqli_query($koneksi, $sql);
	$row = mysqli_fetch_assoc($query);
	if (mysqli_num_rows($query) > 0) {
		$_SESSION['id'] = $row['id'];
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['email'] = $email;
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../admin/index.php">';
            exit();
		} else {
			echo "Email atau Password anda salah !";
	}
} else {
	echo "Email atau Password anda salah !!";
}
?>