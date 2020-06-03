<html>
<head><title></title>
</head>
<body>
	<form action="" method="POST">
		<label for = "cek">Masukkan Angka</label>
		<input type ="text" name = "cek" id = "cek"/>
		<input type ="submit" value="Submit">
	</form>
</body>
</html>
<?php
/*CARA 1:$input=$_POST['cek'];
$status = "PRIMA";
for ($i = 2; $i <= $input-1; $i++){
	if ($input % $i == 0) {
	$status = "TIDAK PRIMA";
	break;
	}
}
echo "Bilangan ".$input." adalah : ".$status;
	CARA 2:*/
$input=$_POST['cek'];
$status = "PRIMA";
function prima($a,$b){
for ($i = 2; $i <= $a-1; $i++){
	if ($a % $i == 0) {
	$b = "TIDAK PRIMA";
	break;
	}
}
echo "Angka ".$a." adalah : Bilangan ".$b;
}
prima($input,$status);
?>    



