<html>
<head><title></title>
</head>
<body>
	<form action="" method="POST">
		<label for="input">INPUT :</label>
		<input type="text" name="input" id="input" placeholder="Tulis Di Sini">
		<button type="submit">Submit</button>
	</form>
</body>
</html>
<?php

/*	CARA 1 :
$input=$_POST['input'];
$hitung=strlen($input);//untuk menghitung suku kata pada variabel input
$membalik=strrev($input);//untuk membalik suku kata pada variabel input
$hurufterakhir=substr($input,-3);//untuk memunculkan 3 huruf kata terakhit
$awal=substr($input,0,-3); //untuk memunculkan huruf awal sampai batas akhir $hurufterakhir
$bintang=strlen ($awal); //untuk menghitung jumlah suku kata variabel awal

if ($hitung < 5){
echo "$input$membalik";
} else if ($hitung>=5){
		for ($x=1;$x<=$bintang;$x++){
		echo "*";
		} 
	echo "$hurufterakhir";
	}
 CARA 2 :
$input=$_POST['input'];
$hitung=strlen($input);
$membalik=strrev($input);
$hurufterakhir=substr($input,-3);
$awal=substr($input,0,-3);
$bintang=strlen ($awal);
if ($hitung>=5){
		for ($x=1;$x<=$bintang;$x++){
		echo "*";
		} 
echo "$hurufterakhir";
} else if ($hitung < 5){
echo "$input$membalik";
}
	CARA 3 :
$input=$_POST ['input'];
$awal=substr($input,0,-3);
function kata($input,$hitung, $membalik,$hurufterakhir,$bintang) {
	if ($hitung>=5){
		for ($x=1;$x<=$bintang;$x++){
		echo "*";
		} 
	echo "$hurufterakhir";
	} else if ($hitung < 5){
	echo "$input$membalik";
	}
}
kata($input,strlen($input),strrev($input),substr($input,-3),strlen ($awal));
 CARA 4 :*/
$input=$_POST['input'];
$awal=substr($input,0,-3);
function kata($input,$awal) {
	if (strlen($input)>=5){
		for ($x=1;$x<=strlen ($awal);$x++){
		echo "*";
		} 
	echo substr($input,-3);
	} else if (strlen($input) < 5){
	echo $input.strrev($input);
	}
}
kata($input,$awal);
?>
