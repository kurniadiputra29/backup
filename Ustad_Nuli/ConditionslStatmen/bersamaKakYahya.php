If Statement :<br>
<?php
$t = date("H");

if ($t < "20") {
    	echo "Have a good day!";
}
?><br>

<?php
$t = date("H");

if ($t < "20") {
	echo $t;
    	echo "Have a good day!";
}
?><br>

<?php
$t = date("i");

if ($t < "45") {
	echo $t;
    	echo "Have a good day!";
}
?><br>

<?php
$t = 50;

if ($t < 20) {
    	echo "Have a good day!";
}
?><br>

<?php
$t = 50;

if ($t < 20) {
    	echo "Have a good day!";
} else {
	echo " Good Night !";
}
?><br>

<?php
$t = "apa";

if ($t == "apa") {
    	echo "Benar!";
} else {
	echo "Salah!";
}

if ($t == "Apa") {
    	echo "Benar!";
} else {
	echo "Salah!";
}
?><br>

<?php
$t = 9;

if ($t < "15") {
    	echo "If Peratma!";
} elseif ($t < "10") {
	echo "If Kedua!";
}else {
	echo "Salah!";
}
?><br>
Switch Statement :<br>
<?php
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
?><br>
<form method = "get" action="">
	<select name="gender">
		<option value = "ulang">Jenis Kelamin</option>
		<option value = "laki">Laki</option>
		<option value = "perempuan">Perempuan</option>
		<option value = "selain">selain</option>
	</select>
	<input type="submit" value = "submit">
</form>
<?php
$gender = $_GET['gender'];

switch ($gender) {
    case "ulang":
        echo "kembali";
        break;
    case "laki":
        echo "laki";
        break;
    case "perempuan":
        echo "perempuan";
        break;
    default:
        echo "transgender";
}
?>



