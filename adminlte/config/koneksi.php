<?php
$server ="localhost";
$user	="root";
$pass	="123";
$db		="adminlte";

$koneksi = mysqli_connect($server, $user, $pass, $db);

if (!$koneksi) {
	die('keneksi gagal'. mysqli_connect_error());
}
?>