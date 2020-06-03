<?php
include '../koneksi.php';
$ID    = $_GET['id'];

$sql = "DELETE FROM ak2 WHERE id = '$ID'";
mysqli_query($connect,$sql);
header('location:index_category.php');
?>
