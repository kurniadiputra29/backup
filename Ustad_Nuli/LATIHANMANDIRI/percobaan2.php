PHP KONSTANTA<br>
<?php
define("NAMA","Muhammad Shlichin" );
define("NILAI","90" );
echo "Nama: ".NAMA;
echo "<br> Nilai :".NILAI;
?><br><br>

PHP VARIABEL<br>
<?php
$s="Muhammad Shlichin";
$b="90";
echo "Nama :" .$s;
echo "<br> Nilai :".$b;
?><br><br>

TIPE DATA PHP <br>
<?php
$nim ="128998652";// tipe string
$nama = 'Lintang';// tipe string
$Umr= 20;// tipe integer
$Nilai= 82.75; // tipe fload
$status= TRUE; // tipe bolean
echo "NIM = ".$nim." <br>";
echo "Nama = $nama <br>";
print "umur =".$Umr;print"<br>";
printf ("nilai = %.3f<br>",$Nilai );
if ($status)
	echo "Status = Aktif <br>";
if ($status)
	echo "Status = Tidak Aktif";  
?><br><br>

TIPE DATA PHP <br>
<?php
$nim ="128998652";// tipe integer
$nama = 'Lintang';// tipe string
$Umr= 20;// tipe integer
$Nilai= 82.75; // tipe fload
$status= TRUE; // tipe bolean
echo "NIM = ".(int) $nim. "<br>";
echo "NAMA = ".(string) $nama. "<br>";
echo "Nilai = ".floatval ($Nilai)."<br>";
echo "Nilai = ".(string) $Nilai."<br>";
?><br><br>

OPERATOR ARITMATIKA <br>
<?php
$gaji=100000000;
$pajak=0.1;
$tarifwp= $gaji - ($gaji*$pajak);
echo "gaji sebelum pajak = Rp" .$gaji. "<br>";
echo "gaji bruto = Rp" .$tarifwp. "<br>" ;
?><br><br>

OPERATOR EXP <br>
<?php
$a=5;
$b=3;
$JU=($a**$b);
echo "$a pangkat $b = " .pow($a,$b)."<br>";
echo "$a pangkat $b = " .$JU;
?><br><br>

OPERATOR LOGIN PHP <br>
<?php
$a = 5;
$b = 4;
echo "$a == $b :" .($a == $b);
echo "<br>$a != $b :" .($a != $b);
echo "<br>$a > $b :" .($a > $b);
echo "<br>$a < $b :" .($a < $b);
echo "<br>$a == $b && ($a < $b)";
?>
