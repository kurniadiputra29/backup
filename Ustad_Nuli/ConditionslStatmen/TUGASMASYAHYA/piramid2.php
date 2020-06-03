<?php 
$looping = $_POST["looping"];
$angka = 5 ;
for ($i=2; $i < $angka ; $i++) { 
	for ($j=$angka; $j > $i; $j--) { 
	echo "*"; 
	} for ($l=0; $l <= $i ; $l++) { 
	echo "$looping";
	} for ($j=$angka; $j > $i; $j--) { 
	echo "*"; 
	}
echo "<br>"; 
}
echo "<a href ='tugaskakyahya2.php'>Back</a>";
/* cara thoriq 
$angka = 3;

for ($x = 0; $x < $angka; $x++) {
 for ($y = $angka; $y > $x; $y--) {
 echo "*";
 }
 for ($z = 0; $z <= $x; $z++) {
 echo "K";
 }
 for ($w = $x; $w < $angka; $w++){
 echo "*";
 }
 echo "<br>";
}
*/
?> 



