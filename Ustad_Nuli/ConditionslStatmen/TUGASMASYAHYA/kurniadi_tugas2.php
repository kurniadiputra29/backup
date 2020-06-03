<?php
$harga = $_POST ["diskon"] ;
$diskon = ($harga * 0.175);
$final = ($harga - $diskon);
	echo "Harga Awal Anda Rp $harga<br>";
	echo "Discount 17,5% Anda Rp $diskon<br>";
	echo "Harga Akhir Anda Rp $final<br> Terimakasih Telah Belanja di CV Kurniadi" ;
	
echo "<br><a href ='tugaskakyahya2.php'>Back</a>";
?>
