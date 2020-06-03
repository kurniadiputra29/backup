<html>
	<head><title></title>
	</head>
	<body>
		<form action="" method="POST">		
			<label for="input">Luas Bola</label>
			<input type="text" name="input" id="input" Placeholder="Isi Jari Jari"/>
			<input type="submit" value="Submit">
		</form>
	</body>
<html>
<?php
$r=$_POST['input'];
function luas($r){
	$L = 4*3.14*($r**2);
	return $L;
	}
echo "Luas Bola = 4 x 3.14 x ($r**2) = ".luas($r);
?><br>

