<!doctype html>
<html>
	<head>Fungsi For pada ARRAY 
		<title>PHP</title>
	</head>
	<body>
	<?php
	echo "<br>";
	$sepatu = array ("Logo", "Next", "Speed", "Adidas");
	echo "Saya menyukai sepatu :"."<br>";		
	$arrlength = count($sepatu);
	for($x = 0; $x < $arrlength; $x++) {
	echo $sepatu[$x];
	echo "<br>";
	}

	echo "<br>";

	$ormas = array ("Muhammadiyah", "NU", "Wahdah Islamiyah", "Nahdatul Wathan", "FPI");
	echo "<br>";
	foreach($ormas as $x => $x_value) {
	echo "Saya Pemuda " . $x_value;
	echo "<br>";
	}

	echo "<br>";

	$bunga= array ("Melati", "Mawar", "Kantil", "Kenaga");
	echo "<br>";
	foreach($bunga as $x => $x_value) {
	echo "Saya suka bunga " . $x_value;
	echo "<br>";
	}
	?>

	</body>
</html>
