<html>
	<head><title></title>
		<style type="text/css">

		</style>
	</head>
	<body>
		<form action="" method="POST">
		<label for = "input1">KALKULATOR</label>
		<input type="text" name="input1"id="input1"/> X
		<input type="text" name="input2"id="input1"/> =
		<input type="submit" value="Lihat">
		</form>
	</body>
</html>

<?php

/*soal 1 : jika $a $b ,maka muncul variabel $a dikali(X) $b dibagi(/) setengah $a =....
	CARA 1 :
$input1=isset($_POST['input1']) ? $_POST['input1'] :"";
$input2=isset($_POST['input2']) ? $_POST['input2'] :"";
$setengah=$input1/2;
$hasil=($input1*$input2)/$setengah;
echo "$input1 X $input2 / $setengah = $hasil" ;

	cara 2 :*/
$input1=isset($_POST['input1']) ? $_POST['input1'] :"";
$input2=isset($_POST['input2']) ? $_POST['input2'] :"";

?>


<html>
	<head><title></title>
		<style type="text/css">

		</style>
	</head>
	<body>
		<form action="" method="POST">
		<label for = "inputA">KALKULATOR</label>
		<input type="text" name="inputA"id="inputA"/> X
		<input type="text" name="inputB"id="inputA"/> =
		<input type="submit" value="Lihat">
		</form>
	</body>
</html>
<?php
//soal 2 : variabel $a ditambah hasil dari ($b dikali $a ditambah $b) hasil dari hitungan tersebut dikali dengan $a dikali 2 =......
$input1=isset($_POST['inputA']) ? $_POST['inputA'] :"";
$input2=isset($_POST['inputB']) ? $_POST['inputB'] :"";
$penambahan=$input2*$input1+$input2;
$perkalian=$input1+$penambahan;
$hasil=$perkalian * $input1 * 2;
echo "( $input1 + ( $input2 X $input1 + $input2 )) X ( $input1 X 2 ) = $hasil";
?>

<html>
	<head><title></title>
		<style type="text/css">

		</style>
	</head>
	<body>
		<form action="" method="POST">
		<label for = "input1A">KALKULATOR</label>
		<input type="text" name="input1A"id="input1A"/> 
		<input type="text" name="input2B"id="input1A"/> 
		<input type="submit" value="Lihat">
		</form>
	</body>
</html>
<?php
/*soal 3 : jika input satu dan input 2 sama jumlah karakternya
maka hapus setengah terakhir  dari input pertama
kemudian gabungkan dengan input 2

jika input 2 lebih sedikit, gabungkan kedua input 
kemudian jadikan uppercase

(kalo itungan setringya tidak habis di bagi 2, maka gunakan fungsi floor)
	CARA 1 :
$input1=isset($_POST['input1A']) ? $_POST['input1A'] :"";
$input2=isset($_POST['input2B']) ? $_POST['input2B'] :"";
$hitung1=strlen($input1);
$pembagian=(1/2*$hitung1);
$pembulatan=floor($pembagian);
$setengahterakhir=substr($input1,0,$pembulatan);
$hitung2=strlen($input2);
$penggabungan1=strtoupper($input1);
$penggabungan2=strtoupper($input2);
if ($hitung1==$hitung2){
echo $setengahterakhir.$input2;
} elseif ($hitung1>$hitung2){
echo $penggabungan1.$penggabungan2;
} 
	CARA 2 :*/
$input1=isset($_POST['input1A']) ? $_POST['input1A'] :"";
$input2=isset($_POST['input2B']) ? $_POST['input2B'] :"";
$hitung1=strlen($input1);
$hitung2=strlen($input2);
$penggabungan1=strtoupper($input1);
$penggabungan2=strtoupper($input2);
if ($hitung1==$hitung2){
	$pembagian=(1/2*$hitung1);
	$pembulatan=floor($pembagian);
	$setengahterakhir=substr($input1,0,$pembulatan);
	$hasil=$setengahterakhir.$input2;
} elseif ($hitung1>$hitung2){
	$hasil=strtoupper($input1.$input2);
} 
echo $hasil;
?>

<html>
	<head><title></title>
		<style type="text/css">

		</style>
	</head>
	<body>
		<form action="" method="POST">
		<label for = "input4A">HITUNG DISKON</label>
		<input type="text" name="input4A"id="input4A"/> 
		<input type="submit" value="Lihat">
		</form>
	</body>
</html>
<?php
/*	soal 4 : buatlah input menghitung diskon dengan syarat :
a.	jika total pembayaran lebih dari atau sama dengan rp 100.000 akan mendapatkan diskon sebesar 30%
b.	jika pembayaran lebih dari atau sama dengan rp 200.000 sampai 500.000 akan mendapatkan diskon sebesar 50%
 CARA 1 :
$input1=isset($_POST['input4A']) ? $_POST['input4A'] :"";
$diskon1=($input1*30/100);
$diskon2=($input1*50/100);
$hasil1=$input1-$diskon1;
$hasil2=$input1-$diskon2;

if (($input1>=100000)&&($input1<200000)){	
echo $hasil1;
} elseif (($input1>=200000)&&($input1<500000)){
echo $hasil2; 
} elseif ($input1<100000){
echo $input1;
}

	CARA 2 :*/
$input1=isset($_POST['input4A']) ? $_POST['input4A'] :"";
if (($input1>=100000)&&($input1<200000)){	
	$diskon1=($input1*30/100);
	$hasil=$input1-$diskon1;
} elseif (($input1>=200000)&&($input1<500000)){
	$diskon2=($input1*50/100);
	$hasil=$input1-$diskon2;
} elseif ($input1<100000){
	$hasil=$input1;
}
echo $hasil;

?>

<html>
	<head><title></title>
		<style type="text/css">

		</style>
	</head>
	<body>
		<form action="" method="POST">
		<label for = "input5A">PERULANGAN KATA</label>
		<input type="text" name="input5A"id="input5A"/> 
		<input type="submit" value="Lihat">
		</form>
	</body>
</html>
<?php
/*	soal 5 : input huruf atau angka, hitung jumlah karakter, tampilkan input tersebut sebanyak jumlah karakternya.
 CARA 1 :*/
$input1=isset($_POST['input5A']) ? $_POST['input5A'] :"";
$hitung=strlen($input1);
for($x=0;$x<$hitung;$x++){
echo " $input1";
}
?>

<html>
	<head><title></title>
		<style type="text/css">

		</style>
	</head>
	<body>
		<form action="" method="POST">
		<label for = "input6A">PERULANGAN</label>
		<input type="text" name="input6A"id="input6A" placeholder="Input Karakter"/> 
		<input type="text" name="input6B"id="input6A" placeholder="Input Angka"/> 
		<input type="submit" value="Lihat">
		</form>
	</body>
</html>
<?php
/*	soal 6 : input karakter a, input angka 5 maka => 
		aaaaa
		aaaa
		aaa
		aa
		a
 CARA 1 :*/
$input1=isset($_POST['input6A']) ? $_POST['input6A'] :"";
$input2=isset($_POST['input6B']) ? $_POST['input6B'] :"";
for($x=0;$x<$input2;$x++){
	for ($j=$input2;$j>$x;$j--){
	echo " $input1";
	}
echo"<br>";
}
?>

<html>
	<head><title></title>
		<style type="text/css">

		</style>
	</head>
	<body>
		<form action="" method="POST">
		<label for = "input7A">GANJIL</label>
		<input type="text" name="input7A"id="input7A" placeholder="Nominal Ganjil"/> 
		<input type="submit" value="Lihat">
		</form>
	</body>
</html>
<?php
/*	soal 7 : input 6 => 5,3,1 
 CARA 1 :
$input1=isset($_POST['input7A']) ? $_POST['input7A'] :"";
$i =1 ;
do {
	echo "$i ";
	$i+=2;
} while ($i <= $input1);
	CARA 2 :*/
function ganjil($n){
	for ($x=1;$n>$x;$n--){
		if ($n%2!=0){
			echo $n. ", ";	
		}
	}
}
ganjil($_POST['input7A']);
?>

<html>
	<head><title></title>
		<style type="text/css">

		</style>
	</head>
	<body>
		<form action="" method="POST">
		<label for = "input8A">GENAP</label>
		<input type="text" name="input8A"id="input8A" placeholder="Nominal Genap"/> 
		<input type="submit" value="Lihat">
		</form>
	</body>
</html>
<?php
/*	soal 8 : input 9 => 8,6,4,2 
 CARA 1 :
$input1=isset($_POST['input8A']) ? $_POST['input8A'] :"";
$i =2 ;
do {
	echo "$i ";
	$i+=2;
} while ($i <= $input1)

	CARA 2 :*/
function genap($n){
	for ($x=1;$n>$x;$n--){
		if ($n%2==0){
			echo $n. ", ";	
		}
	}
}
genap($_POST['input8A']);
?>

<html>
	<head><title></title>
		<style type="text/css">

		</style>
	</head>
	<body>
		<form action="" method="POST">
		<label for = "input9A">ACAK</label>
		<input type="text" name="input9A"id="input9A" placeholder="AWAL"/> 
		<input type="text" name="input9B"id="input9A" placeholder="AKHIR"/>
		<input type="submit" value="Lihat">
		</form>
	</body>
</html>
<?php
/*	soal 9 : input awal dan akhir kemudian muncuklan 3 angka sembarang, 2 ganjil, 1 genap.
 CARA 1 :*/
$input1=isset($_POST['input9A']) ? $_POST['input9A'] :"";
$input1=isset($_POST['input9B']) ? $_POST['input9A'] :"";
?>
