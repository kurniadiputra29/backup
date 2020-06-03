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
<?php
$favcolor = "green";

switch ($favcolor) {//fungsinya sama dengan for
    case "red"://fungsinya seperti elseif
        echo "Your favorite color is red!";
        break;//berfungsi untuk menghentikan
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default://fungsinya seperti else
        echo "Your favorite color is neither red, blue, nor green!";
}
?><br>
<?php
$nilai = 70;

switch ($nilai) {
    case $nilai <=50:
        echo "C";
        break;
    case $nilai <=75:
        echo "B";
        break;
    case $nilai <=100:
        echo "A";
        break;
    default:
        echo "-";
}
?>?><br>
<?php
$nilai = 'sate';

switch ($nilai) {
    case 'bakso';
    case 'mie ayam';
    case 'sate';
        echo 'Warung Makan pak tejo';
        break;
    default:
        echo "-";
	break;
}
?><br>
<?php // while di cek dulu baru di munculkan
$x = 1; 

while ($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
} 
?><br>
<?php //for sama seperti while
$a = 1 ; 

for ($x = $a ; $x <= 5;$x++) {
    echo "The number is: $x <br>";
} 
?><br>
<?php // do while di munculkan baru di cek, walaupun salah tetap di munculkan.
$x = 10; 

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
?><br>
<?php 
$colors = array(1 =>"red","A" => "green", "blue", "yellow"); 

foreach ($colors as $key => $value) {
    echo "$key => $value <br>";//key digunakan untuk menentukan indek, dan value untuk isinya
}
?>


