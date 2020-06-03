<?php
$server ="localhost";
$user	="root";
$pass	="1234";
$db		="laporan_keuangan";

$koneksi = mysqli_connect($server, $user, $pass, $db);

if (!$koneksi) {
	die('keneksi gagal'. mysqli_connect_error());
}
$sql1 = "CREATE TABLE user (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL,
password VARCHAR(50) NOT NULL
)";

$sql2 = "CREATE TABLE foto (
id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
nama VARCHAR(30) NOT NULL,
foto VARCHAR(100) NULL,
keterangan VARCHAR(50) NULL
)";

$sql3 = "CREATE TABLE cash_in (
id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
tanggal DATE,
jumlah INT(11) NOT NULL,
keterangan VARCHAR(50) NULL,
user VARCHAR(50) NOT NULL
)";

$sql4 = "CREATE TABLE cash_out (
id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
tanggal DATE,
jumlah INT(11) NOT NULL,
keterangan VARCHAR(50) NULL,
user VARCHAR(50) NOT NULL
)";

mysqli_query($koneksi, $sql1);
mysqli_query($koneksi, $sql2);
mysqli_query($koneksi, $sql3);
mysqli_query($koneksi, $sql4);
?>