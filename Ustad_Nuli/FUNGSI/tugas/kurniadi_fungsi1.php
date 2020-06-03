<html>
<head><title></title>
</head>
<body>
	<form action="" method="POST" >
		<label for="input">INPUT :</label>
		<input type="text" name="input" id="input" placeholder="Tulis Di Sini">
		<button type="submit">Submit</button>
	</form>
</body>
</html>
<?php 
/*CARA 1:
$input=$_POST ['input'];
$hurufbalok = strtoupper($input);
$jumlahkata = str_word_count($input);
	echo "'$hurufbalok' <br> Jumlah kata : $jumlahkata";

	CARA 2:
$input=$_POST ['input'];
$hurufbalok = strtoupper($input);
$jumlahkata = str_word_count($input);
function masuk1($input){
	echo "'$input' <br>";
}
masuk1($hurufbalok);
function masuk2($input){
	echo " jumlah kata : $input";
}
masuk2($jumlahkata);

	CARA 3:
$input=$_POST ['input'];
$hurufbalok = strtoupper($input);
$jumlahkata = str_word_count($input);
	echo "'$hurufbalok' <br>";
	echo "Jumlah kata : $jumlahkata";

	CARA 4:*/
$input=$_POST ['input'];
function kata($hurufbalok, $jumlahkata) {
    echo "'$hurufbalok' <br> Jumlah Kata : $jumlahkata";
}
kata(strtoupper($input),str_word_count($input));

/*CARA 5:
$input=$_POST ['input'];
function t($input) {
    echo strtoupper ($input)."<br>";
		echo "Jumlah Kata : " .str_word_count($input);
}
t($input);*/
?>


