<!doctype html>
<html>
	<head>Contoh ARRAY 
		<title>PHP</title>
	</head>
	<body>
	<?php
	echo "<br>";
	$sepatu = array ("Logo", "Next", "Speed", "Adidas");
	echo "Saya Memakai Sepatu " . $sepatu[0] . ", " . $sepatu[1] .", ". $sepatu[2] . " dan " . $sepatu[3] .".";

	echo "<br>";
	echo count($sepatu);

	echo "<br>";

	$ormas = array ("Muhammadiyah", "NU", "Wahdah Islamiyah", "Nahdatul Wathan", "FPI");
	echo "Saya Anggota Pemuda " . $ormas[0] . ", " . $ormas[1] . ", " . $ormas[2] .", ". $ormas[3] ." dan ".$ormas[4]. ".";

	echo "<br>";
	echo count($ormas);

	echo "<br>";
	
	$bunga= array ("Melati", "Mawar", "Kantil", "Kenaga");
	echo "Saya menyukai Bunga " .$bunga[0]. ", " .$bunga[1]. ", " .$bunga[2]. "dan " .$bunga[3].".";

	echo "<br>"
	.count($bunga);
	?>

	
	</body>
</html>
