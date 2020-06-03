<!doctype html>
<html>
	<head>PHP ARRAY OPERATORS
		<title>PHP</title>
	</head>
	<body>
	<?php
	echo "<br>";
	$NAMA = array ("Adi", "Udin", "Ipul");
	echo "I friend " . $NAMA[0] . ", " . $NAMA[1] . " and " . $NAMA[2] .".";

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
	
	$car[0]="volvo";
	$car[1]="BMW";
	$car[2]="Toyota";
	echo var_dump($car);
	echo "<br>";
	$arrlength = count($car);
	for($x = 0; $x < $arrlength;$x++ ) {
	echo $car[$x];
	echo "<br>";
	}
	echo "<br>";

	
	?>

	
	</body>
</html>
