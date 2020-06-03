IF PHP <br>
<?php
//if seperti katup/ kran air untunk mengarahkan air.
/* bentuk if (conditional) {
 echo perintah - jika - kondisi - true
}*/
$nilai = 80;
if ($nilai > 70 ){
echo "Nilai anda $nilai, Anda LULUS";
}  
?><br><br>

KONDISI IF ELSE PHP <br>
<?php
$nilai = 50;
if ($nilai > 70 ){
echo "Nilai anda $nilai, Anda LULUS";
} else {
echo "Nilai anda $nilai, Anda Gagal";
}  
?><br>

<?php
$user = "kurni";
$pass = 123;
if ($user == "kurni" and $pass == 123 ){
echo "Login Berhasil";
} else {
echo "Login Gagal";
}  
?><br><br>

IF ISSET PHP <br>
<?php
$user = "";
if (!isset ($user)) {
echo "Variabel tidak ada";
} else {
echo "variabel ada";
}  
?><br><br>

IF BERSARANG PHP <br>
<?php
$nilai = 0 ;
$bolos = "-";
if ($nilai <= 100 && $nilai >= 80){
echo "Nilai anda $nilai, Anda Lulus";
} else if ($nilai >= 50 && $nilai < 80){
echo "Nilai anda $nilai, Anda Remidi";
} else if ($nilai >= 1 && $nilai < 50){
echo "Nilai anda $nilai, Anda Buruk";
} else {
echo "$bolos";
}  
?><br><br>

IF KHUSUS PHP <br>
<?php
$tahun = date ("Y") ;
$kabisat = ($tahun % 4 == 0) ? " TAHUN KABISAT" : "BUKAN TAHUN KABISAT";
echo "Tahun <b> $tahun </b>, $kabisat "
?><br><br>

IF BERSARANG PHP <br>
<?php
$day = date ("D") ;
switch ($day) {
	case 'Sun' : $hari = "Ahad" ; break ;
	case 'Mon' : $hari = "Senin" ; break ;
	case 'Tue' : $hari = "Selasa" ; break ;
	case 'Wed' : $hari = "Rabu" ; break ;
	case 'Thu' : $hari = "Kamis" ; break ;
	case 'Fri' : $hari = "Jum'at" ; break ;
	case 'Sat' : $hari = "Sabtu" ; break ;
	default : $hari = "KIAMAT";
	}
echo "Hari ini hari $day";
?><br><br>

FOR PHP <br>
<?php
// contoh 1
for ($i = 1 ; $i <= 10 ; $i++) {
	echo "$i";
} 
echo "<br><br>";
// contoh 2
for ($i = 1; ;$i++) {
	if ($i > 10) {
	break;
	}
	echo "$i";
}
echo "<br><br>";
//Contoh 3
$a = 1;
for (; ; ){
	if ($a>10){
	break;
	}
	echo "$a";
	$a++;
} 
echo "<br><br>";
// Contoh 4
for ($i = 1; $i <= 10; print "$i", $i++);
?><br><br>
WHILE PHP <br>
<?php
//vcontoh 1
$a =1;
while ($a<=10){
 echo $a++;
}
echo "<br><br>";
// contoh 2
$b =10;
while ($b>=1):
	echo "$b";
	$b--;
	endwhile;
echo "<br><br>";
// contoh 3
$c=1;
while ($c<=6){
	echo "<h$c>$c huruf </h$c><br>";
	$c++;
}
// contoh 4
$c=1;
while ($c<=6){
	echo "huruf<br>";
	$c++;
}
?><br><br>
DO WHILE PHP <br>
<?php // do while di munculkan dulu baru di cek
$a=1;//batas minimal (inisialisasi)
do {
	echo "$a"; // pemunculan (blok perintah pemunculan)
	$a+=2; // perulangan (perubahan-kondisi)
} while ($a <=20); // batas akhir
?><br>
<?php 
$a=2; 
do {
	echo "nilai anda :$a <br>";
	$a++;
} while ($a<=5)
?><br><br>
FOREACH PHP<br>
<?php //KHUSUS UNTUK ERRAY
$presiden = array("Soekarno", "Soeharto", "B.J. Habibie", "GusDur", "Megawati", "SBY", "Jokowi");// harus di perhatikan tanda "" dan koma. 
echo "Presiden RI dari masa ke masa"; //judul pemunculan
echo "<ol>";// ul untuk mengurutkan bulet hitam, ol untuk mengurutkan secara angka.
foreach ($presiden as $kepala){ // as untuk menggantu nama variabel 
	echo "<li>$kepala</li>"; // hal yng di munculkan
}
echo "</ol>";
?><br><br>
<?php //tanpa menggunakan ol & ul
$presiden = array("Soekarno", "Soeharto", "B.J. Habibie", "GusDur", "Megawati", "SBY", "Jokowi");// harus di perhatikan tanda "" dan koma. 
echo "Presiden RI dari masa ke masa <br>"; //judul pemunculan
foreach ($presiden as $kepala){ // as untuk menggantu nama variabel 
	echo "$kepala <br>"; // hal yng di munculkan
}
?><br><br>
STRUKTUR BREAK DAN CONTINUE PHP<br>
<?php
for ($a=1; $a<10; $a++){ // batas awal = 1 & batas akhir = 10
	if ($a == 5) // ketika bilangan sampai ke lima maka dia tidak di munculkan
	continue; // dia akan melanjutkan proses
	if ($a == 9) // angka ini tidak akan di munculkan dan sekaligus angka terakhir yang di muncukan karena ada perintah break
	break;
	echo "$a";
}
?><br><br>
<?php
$awal=2; // variabel ini boleh anda isi sesuka kalian di form
$akhir=10;
for ($a=$awal; $a<$akhir; $a++){ // batas awal = 1 & batas akhir = 10
	if ($a == 3) // ketika bilangan sampai ke lima maka dia tidak di munculkan
	continue; // dia akan melanjutkan proses
	if ($a == 8) // angka ini tidak akan di munculkan dan sekaligus angka terakhir yang di muncukan karena ada perintah break
	break;
	echo "$a";
}
?>


