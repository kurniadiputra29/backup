<?php
include '../koneksi.php';
$ID    = $_GET['id'];

$sql = "DELETE FROM tn2 WHERE id = '$ID'";
mysqli_query($connect,$sql);
header('location:index_category.php');
?>
