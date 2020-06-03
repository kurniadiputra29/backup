<html>
	<head><title>FUNGSI</title>
	</head>
	<body>
		<form action="" method="POST">
			<label for="input1">KETIK DI SINI</label>
			<input type="text" name="input1" id="input1">
			<input type="submit" value="CEK">	
		</form>
	</body>
</html>

<?php
/*1. Buatkan fungsi untuk merubah kata aku menjadi saya dalam sebuah string
contoh input 'aku membeli sepeda', 'bukan aku, tapi dia'
outputnya 'saya membeli sepeda', 'bukan saya, tapi dia'
	CARA 1 :
$input=isset($_POST['input1']) ? $_POST['input1']:"";
$fontkecil=strtolower($input);
$fontbalok=strtoupper($input);
function kata($aku,$AKU){
echo "$aku <br>"."$AKU" ;
}
kata(str_replace("aku", " saya", $fontkecil),str_replace("AKU", " SAYA", $fontbalok));
	CARA 2 :*/
$input=isset($_POST['input1']) ? $_POST['input1']:"";
function kurni($fontkecil){
echo str_replace("aku", " saya", $fontkecil);  
}
kurni(strtolower($input))
?><br><br>

<html>
	<head><title></title>
	</head>
	<body>	
		<form action="" method="POST">
			<label for="input2">KETIK DI SINI</label>
			<input type="text" name="input2" id="input2">
			<input type="submit" value="CEK">	
		</form>
	</body>
</html>
<?php
/*2. Buatkan fungsi untuk merubah input angka menjadi string dipisah dengan spasi
contoh input '76', '893'
outputnya 'tujuh enam', 'delapan sembilan tiga'
	CARA 1 :*/
$input=isset($_POST['input2'])?$_POST['input2']:"";
function rubah($input){
$angka= array(0,1,2,3,4,5,6,7,8,9);
$huruf= array("nol","satu","dua","tiga","empat","lima","enam","tujuh","delapan","sembilan");
return srt_replace("$angka"," $huruf"," $input");
}
rubah($input);
/*
	CARA 2 :
	function penyebut($nilai) {
		$nilai = abs($nilai);
		$huruf = array("null", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan");
		$temp = "";
		if ($nilai <"10") {
			$temp = " ". $huruf[$nilai];
		} else if ($nilai < "1000000000000") {
			$temp = penyebut($nilai/"10"). penyebut($nilai % "10");
		} 
		return $temp;
	}
	$input =$_POST['input2'];
	echo penyebut($input);



	RUMUS INTEGER MENJADI STRING
	// FUNGSI TERBILANG OLEH : MALASNGODING.COM
	// WEBSITE : WWW.MALASNGODING.COM
	// AUTHOR : https://www.malasngoding.com/author/admin
	function penyebut($nilai) {
		$nilai = abs($nilai);
		$huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
		$temp = "";
		if ($nilai < 12) {
			$temp = " ". $huruf[$nilai];
		} else if ($nilai <20) {
			$temp = penyebut($nilai - 10). " belas";
		} else if ($nilai < 100) {
			$temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
		} else if ($nilai < 200) {
			$temp = " seratus" . penyebut($nilai - 100);
		} else if ($nilai < 1000) {
			$temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
		} else if ($nilai < 2000) {
			$temp = " seribu" . penyebut($nilai - 1000);
		} else if ($nilai < 1000000) {
			$temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
		} else if ($nilai < 1000000000) {
			$temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);
		} else if ($nilai < 1000000000000) {
			$temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
		} else if ($nilai < 1000000000000000) {
			$temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));
		}     
		return $temp;
	}
 
	function terbilang($nilai) {
		if($nilai<0) {
			$hasil = "minus ". trim(penyebut($nilai));
		} else {
			$hasil = trim(penyebut($nilai));
		}     		
		return $hasil;
	}
 
	$angka = 1530093;
	echo terbilang($angka);
	*/
?>
