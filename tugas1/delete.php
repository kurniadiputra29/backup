<?php
include 'koneksi3.php';
$ID    = $_GET['id'];

$sql = "DELETE FROM nilai WHERE id = '$ID'";
mysqli_query($connect,$sql);
header('location:index2.php');
?>
