<?php
$server		= "localhost";
$user		= "root";
$pass		= "123";
$db			= "puskesmas";

$konek = mysqli_connect($server, $user, $pass, $db);
if (!$konek) {
	die('koneksi gagal' . mysqli_error());
} 

$sql1 = "CREATE TABLE role (
id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
nama VARCHAR(40) NOT NULL
)";

$sql2 = "CREATE TABLE user (
id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
nama VARCHAR(40) NOT NULL,
email VARCHAR(40) NOT NULL,
password VARCHAR(100) NOT NULL,
photo VARCHAR(200) NULL,
status boolean, 
role_id INT(11) NOT NULL
)";

$sql3 = "CREATE TABLE dokter (
id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
nama VARCHAR(40) NOT NULL,
nip VARCHAR(20) NOT NULL,
id_jabatan INT(11) NOT NULL,
id_pelayanan INT(11) NOT NULL
)";

$sql4 = "CREATE TABLE layanan (
id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
nama VARCHAR(40) NOT NULL,
deskripsi TEXT NOT NULL
)";

$sql5 = "CREATE TABLE members (
id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
nama VARCHAR(40) NOT NULL,
telp VARCHAR(20) NOT NULL,
tanggal_pendaftaran DATE
)";

$sql6 = "CREATE TABLE obat (
id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
nama VARCHAR(40) NOT NULL,
status VARCHAR(20) NOT NULL,
jumlah INT(11) NOT NULL,
id_satuan INT(11) NOT NULL,
harga INT(11) NOT NULL
)";

$sql7 = "CREATE TABLE inbox (
id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
nama VARCHAR(40) NOT NULL,
isi text,
tanggal DATE
)";

$sql8 = "CREATE TABLE records (
id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
id_member INT(11) NOT NULL,
tanggal_masuk DATE,
keluhan TEXT,
id_layanan INT(11) NOT NULL,
id_ruang INT(11) NOT NULL,
id_dokter INT(11) NOT NULL
)";

$sql9 = "CREATE TABLE obat (
id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
nama VARCHAR(40) NOT NULL
)";

$sql10 = "CREATE TABLE satuan (
id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
nama VARCHAR(40) NOT NULL
)";

$sql11 = "CREATE TABLE staff (
id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
nama VARCHAR(40) NOT NULL,
id_jabatan INT(11) NOT NULL,
nip VARCHAR(20) NOT NULL,
gol VARCHAR(2) NOT NULL,
telepon VARCHAR(20) NOT NULL,
alamat VARCHAR(100) NOT NULL
)";

$sql12 = "CREATE TABLE jabatan (
id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
nama VARCHAR(40) NOT NULL
)";

$sql13 = "CREATE TABLE jenis_jabatan (
id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
nama VARCHAR(40) NOT NULL
)";

$sql14 = "CREATE TABLE ruangan (
id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
nama VARCHAR(40) NOT NULL
)";

mysqli_query($konek, $sql1);
mysqli_query($konek, $sql2);
mysqli_query($konek, $sql3);
mysqli_query($konek, $sql4);
mysqli_query($konek, $sql5);
mysqli_query($konek, $sql6);
mysqli_query($konek, $sql7);
mysqli_query($konek, $sql8);
mysqli_query($konek, $sql9);
mysqli_query($konek, $sql10);
mysqli_query($konek, $sql11);
mysqli_query($konek, $sql12);
mysqli_query($konek, $sql13);
mysqli_query($konek, $sql14);
?>