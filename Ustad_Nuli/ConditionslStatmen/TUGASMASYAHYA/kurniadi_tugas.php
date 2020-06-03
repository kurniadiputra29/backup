<?php
$belanja = $_POST ["cek"];
$kuota = (30000 - $belanja);
$pas = "Cepet pulang, Udah pada laper !!!";
if ($belanja < 30000){
	echo "Belanja Rp $kuota lagi deh. Biar pas !!!";
} else if ($belanja>30000){
	echo "Harap kurangi belanjaan kamu !!!";
} else if ($belanja=0){
	echo "Mari Belanja!!!";
} else {
	echo $pas;
}
echo "<br><a href='tugaskakyahya2.php'>Back</a>"
?>
