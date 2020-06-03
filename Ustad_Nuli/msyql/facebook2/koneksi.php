<?php
$servername	= "localhost";
$username		= "root";
$password		= "123";
$dbname			= "facebook";
$connect		= mysqli_connect($servername, $username, $password, $dbname);
if (!$connect){
die ("tidak terkoneksi !!! di : ". mysqli_connect_error());
}
$sql1 = "CREATE TABLE facebook2 (
id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
email_telepon VARCHAR(50) NOT NULL,
password VARCHAR(30) NOT NULL
)";
$sql2 = "CREATE TABLE daftar_facebook2 (
id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nama_depan VARCHAR(50) NOT NULL,
nama_belakang VARCHAR(30) NOT NULL,
no_seluler VARCHAR(20) NOT NULL,
sandi VARCHAR(30) NOT NULL,
tanggal VARCHAR(2) NOT NULL,
bulan VARCHAR(20) NOT NULL,
tahun VARCHAR(4) NOT NULL,
jenis_kelamin VARCHAR(20) NOT NULL
)";
mysqli_query($connect,$sql1);
mysqli_query($connect,$sql2);
?>

