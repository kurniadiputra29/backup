<!doctype html>
<html>
	<head>PHP STRING OPERATOR
		<title>PHP</title>
	</head>
	<body>
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
	</body>
</html>
