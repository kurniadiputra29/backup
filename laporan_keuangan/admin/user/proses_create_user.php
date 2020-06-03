<?php

include '../../config/koneksi.php';
echo $name = $_POST['nama'];
echo $email = $_POST['email'];
echo $password = $_POST['password'];

$sql = "INSERT INTO user (nama, email, password) VALUES ('$name', '$email', '$password')";
mysqli_query($koneksi,$sql);
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index_user.php">';
      exit();
?>