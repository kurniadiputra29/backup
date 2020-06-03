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
$sql = "CREATE TABLE mata_pelajaran (
id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nama VARCHAR(30) NOT NULL,
pengajar VARCHAR(30) NOT NULL,
status BOOLEAN NOT NULL
)";
mysqli_query($connect, $sql)
// if (mysqli_connect_error()) {
//     die("Database connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
?>
