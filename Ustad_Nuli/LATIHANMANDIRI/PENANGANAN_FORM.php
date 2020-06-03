MENYATUKAN FORM DAN PROSES
<!DOCTYPE html>
<html>
<head>
	<title>Pengolahan Form</title>
</head>
<body>
	<form action ="" method = "POST" name="input" >
		<label for = "input">Nama Anda</label>
		<input type="text" name="input"id="input" placeholder="isi nama Anda"/><br> 
		<input type="submit" value="Input">
	</form>
</body>
</html>
<?php
$nama= $_POST ['input'];
	echo "Nama Anda : <b>$nama</b>";	
?>
