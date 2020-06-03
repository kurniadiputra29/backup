<!doctype html>
<html>
	<head>PHP LOGICAL OPERATOR 
		<title>PHP</title>
	</head>
	<body>
	<?php
	echo "<br>";
	$x = 10;
	$y = 20;

	if ($x == 40 and $y == 20) {
	echo "Selamat Datang 1 !";
	}
	echo "<br>";

	if ($x == 100 && $y == 20) {
	echo "Selamat Datang 2 !";
	}
	echo "<br>";

	if ($x == 20 or $y == 20) {
	echo "Selamat Datang 3 !";
	}
	echo "<br>";	

	if ($x == 30 xor $y == 40) {
	echo "Selamat Datang 4 !";
	}
	echo "<br>";

	if ($x == 10 xor $y == 40) {
	echo "Selamat Datang 5 !";
	}
	echo "<br>";

	if ($x == 10 and $y == 20) {
	echo "Selamat Datang 6 !";
	}
	echo "<br>";

	if ($x < 100 and $y == 20) {
	echo "Selamat Datang 7 !";
	}
	echo "<br>";
	
	if ($x >= 10 and $y != 20) {
	echo "Selamat Datang 8 !";
	}
	echo "<br>";
	if ($x !== 20 || $y < 20) {
	echo "Selamat Datang 9 !";
	}
	echo "<br>";
	?>
	</body>
</html>
