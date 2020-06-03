<html>
	<head><title></title></head>
	<body>
		<form action="" method="POST">
			<label id = "input">Tulis di sini</label>
			<input type="text" name ="input" id="input">
			<input type="submit" value="Submit">
		</form>		
	</body>
</html>

<?php
//soal input integer dengan syarat 3 huruf depan besar dan spasi menjadi + = kurni adi putra => KURni+adi+putra 
 /*CARA: 1
$input=$_POST['input'];
$hitung=strlen($input);
$hurufakhir=substr($input,3);
$hurufawal=substr($input,0,3);
$kapital=strtoupper($hurufawal);

echo "$kapital";
echo str_replace(" ", "+", $hurufakhir);
	Cara: 2
$input=$_POST['input'];
$hitung=strlen($input);
$hurufakhir=substr($input,3);
$hurufawal=substr($input,0,3);
function kata($kapital,$text){
	echo "$kapital";
	echo "$text";
}
kata(strtoupper($hurufawal),str_replace(" ", "+", $hurufakhir));
	CARA: 3*/
$input=$_POST['input'];
$hitung=strlen($input);
function kata($hurufawal,$hurufakhir){
	echo strtoupper($hurufawal);
	echo str_replace(" ", "+", $hurufakhir);
}
kata(substr($input,0,3),substr($input,3));
?>
