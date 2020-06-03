<?php
$servername = "localhost"; //nama server
$username   = "root"; // username dari mysql yang ada di phpmyadmin
$password   = "1234"; // password dari mysql yang ada di phpmyadmin
$dbname     = "pondokit"; // nama database yang sudah dibuat

// Create connection
$connect = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE news (
id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
title VARCHAR(30) NOT NULL,
content text NOT NULL,
status boolean,
author text NOT NULL,
tanggal date 
)";
mysqli_query($connect, $sql);
?>