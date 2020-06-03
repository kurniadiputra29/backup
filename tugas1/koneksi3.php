<?php
$servername = "localhost";
$username   = "root";
$password   = "123";
$dbname     = "latihan";
// Create connection
$connect = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());//untuk memunculkan eror
}
$sql = "CREATE TABLE nilai (
id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nama_siswa VARCHAR(30) NOT NULL,
kelas CHAR(2) NULL,
pelajaran VARCHAR(25) NULL,
nilai int(3)
)";
mysqli_query($connect, $sql)
// if (mysqli_connect_error()) {
//     die("Database connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
?>
