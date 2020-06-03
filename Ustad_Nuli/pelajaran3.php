<!doctype html>
<html>
	<head>
		<title>PELAJARAN 3</title>
	</head>
	<body>
PHP DECREMEN OPERATION 
	<?php	
		echo "<br>";	
		$x = 10;
		echo ++$x;
		echo ++$x;
		echo "<br>";
	?>
	<?php
		$x = 10;
		echo $x++;
		echo $x++;
		echo $x++;
		echo "<br>";
	?>
	<?php
		$x = 10;
		echo --$x;
		echo --$x;
		echo --$x;
		echo "<br>";
	?>
	<?php
		$x = 10;
		echo $x--;
		echo $x--;
		echo $x--;
		echo "<br>";
	?>
PHP LOGICAL OPERATOR 
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
PHP STRING OPERATOR
	<?php
	echo "<br>";
	$txt1 = "Hello";
	$txt2 = " world!";
	echo $txt1 . $txt2;
	?>

	<?php
	echo "<br>";
	$txt1 = "Hello";
	$txt2 = " world!";
	$txt1 .= $txt2;
	echo $txt1;
	echo "<br>"
	?>
PHP ARRAY OPERATORS
	<?php
	echo "<br>";
	$NAMA = array ("Adip", "Udin", "Ipul");
	echo "I like " . $NAMA[0] . ", " . $NAMA[1] . " and " . $NAMA[2] .".";

	echo "<br>";
	echo count($NAMA);

	echo "<br>";
	$arrlength = count($NAMA);
	for($x = 0; $x < $arrlength; $x++) {
	echo $NAMA[$x];
	echo "<br>";
	}

	echo "<br>";

	$cars = array ("Volvo", "BMW", "Toyota");
	echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] .".";

	echo "<br>";
	echo count($cars);

	echo "<br>";
	$arrlength = count($cars);
	for($x = 0; $x < $arrlength; $x++) {
	echo $cars[$x];
	echo "<br>";
	}

	echo "<br>";
	?>
	</body>
</html>
