<?php
$servername = "localhost";
$username   = "root";
$password   = "123";
$dbname     = "tugasberat";
// Create connection
$connect = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());//untuk memunculkan eror
}
$sql = "CREATE TABLE nilai (
id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
siswa_id INT(11) NOT NULL,
kelas_id INT(11) NOT NULL,
mapel_id INT(11) NOT NULL,
value INT(11) NOT NULL
)";
mysqli_query($connect, $sql)
// if (mysqli_connect_error()) {
//     die("Database connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
?>
