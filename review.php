<!doctype html>
<html>
	<head>PHP Comparison Operators
		<title>PHP</title>
	</head>
	<body><br>
	<?php
	$x = 23;
	$y = "23";
	var_dump($x == $y); //
	?>

	<br>
	<?php
	$x = 10;	
	echo ++$x
	."<br>"
	.++$x
	?>
	<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);
for($x = 0; $x < $arrlength; $x++) {
echo $cars[$x];
echo "<br>";
}
?>

	<br>
	<?php
	$x = 40;
	$y = "40";
	var_dump($x === $y); //
	?>

	<br>
	<?php
	$x = 10;
	$y = "11";
	var_dump($x != $y); //
	?>

	<br>
	<?php
	$x = 20;
	$y = 20;
	var_dump($x !== $y); //
	?>

	<br>
	<?php
	$x = 12;
	$y = 5;
	var_dump($x > $y); //
	?>

	<br>
	<?php
	$x = 15;
	$y = 10;
	var_dump($x < $y); //
	?>
	</body>
</html>
