<?php
$nameserver ="localhost";
$username		="root";
$password		="123";
$dbname			="point_of_sale";
// Create connection
$connect = mysqli_connect($nameserver,$username,$password,$dbname);
// Check connection
if (!$connect){
	die ("tidak connect: ". mysqli_connect_error());
}
$sql1 = "CREATE TABLE category (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL
)";
$sql2 = "CREATE TABLE item (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
category INT(11) NOT NULL,
name VARCHAR(100) NOT NULL, 
price INT(11) NOT NULL, 
status boolean NOT NULL
)";
$sql3 = "CREATE TABLE orders (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
table_number VARCHAR(10) NOT NULL, 
item_id INT(11) NOT NULL,
qty INT(11) NOT NULL,
total INT(11) NOT NULL,
diskon VARCHAR(11) NULL,
after_diskon INT(11) NULL
)";
mysqli_query($connect, $sql1);
mysqli_query($connect, $sql2);
mysqli_query($connect, $sql3);
?>
