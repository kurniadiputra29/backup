<?php
$server ="localhost";
$user	="root";
$pass	="1234";
$db		="school";

$koneksi = mysqli_connect($server, $user, $pass, $db);

if (!$koneksi) {
	die('keneksi gagal'. mysqli_connect_error());
}
$sql1 = "CREATE TABLE input_data_guru (
NIP_NIG VARCHAR(20) PRIMARY KEY NOT NULL,
nama VARCHAR(30) NOT NULL,
tempat VARCHAR(50) NOT NULL,
tanggal_lahir DATE,
jenis_kelamin boolean,
agama VARCHAR(20) NOT NULL,
no_Telp VARCHAR(20) NULL,
jabatan VARCHAR (30) NOT NULL,
golongan VARCHAR (5) NOT NULL,
tanggal_mulai_bertugas DATE,
honor_guru INT(11) NOT NULL,
jam_mengajar INT(11) NOT NULL,
foto_guru VARCHAR(50) NULL
)";

$sql2 = "CREATE TABLE input_data_siswa (
no_induk INT(11) PRIMARY KEY NOT NULL,
nama VARCHAR(30) NOT NULL,
tempat VARCHAR(50) NOT NULL,
tanggal_lahir DATE,
jenis_kelamin boolean,
agama VARCHAR(20) NOT NULL,
kelas VARCHAR(20) NOT NULL,
jurusan VARCHAR(20) NOT NULL,
foto_siswa VARCHAR(50) NULL
)";

$sql3 = "CREATE TABLE inp_data_buku_induk (
no_induk INT(11) PRIMARY KEY NOT NULL,
kewarganegaraa VARCHAR(50) NOT NULL,
anak_ke VARCHAR(2) NOT NULL,
jumlah_saudara_kandung VARCHAR(2) NULL,
jumlah_saudara_tiri VARCHAR(2) NULL,
nama_ayah VARCHAR(50) NULL,
pendidikan_ayah VARCHAR(50) NULL,
pekerjaan_ayah VARCHAR(50) NULL,
penghasilan_ayah INT(11) NULL,
nama_ibu VARCHAR(50) NULL,
pendidikan_ibu VARCHAR(50) NULL,
pekerjaan_ibu VARCHAR(50) NULL,
penghasilan_ibu INT(11) NULL,
alamat_orang_tua VARCHAR(100) NOT NULL
)";

$sql4 = "CREATE TABLE user (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL,
password VARCHAR(50) NULL,
foto VARCHAR(100) NULL,
role_id INT(11) NOT NULL
)";

$sql5 = "CREATE TABLE role (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(50) NOT NULL
)"; 

mysqli_query($koneksi, $sql1);
mysqli_query($koneksi, $sql2);
mysqli_query($koneksi, $sql3);
mysqli_query($koneksi, $sql4);
mysqli_query($koneksi, $sql5);
?>