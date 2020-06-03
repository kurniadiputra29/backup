<?php
$PHP = array ("1. Anto","2. Edi","3. Sita");
$strlent = count($PHP);
echo "<br> Bahasa PHP : <br>";
for ($x=0; $x<$strlent; $x++){
echo $PHP[$x] ."<br>";
}
$Delphi = array ("1. Anto","2. Budi");
$strlent2 = count($Delphi);
echo "<br> Bahasa Delphi : <br>";
for ($c=0; $c<$strlent2; $c++){
echo $Delphi[$c]."<br>";
}
$MYSQL = array ("1. Nana","2. Alif","3. Jordan","4. Ahmad");
$strlent3 = count($MYSQL);
echo "<br> Bahasa MYSQL : <br>";
for ($e=0; $e<$strlent3; $e++){
echo $MYSQL[$e]."<br>";
}
$C = array ("1. Mastro","2. Rudi","3. Omar");
$strlent4 = count($C);
echo "<br> Bahasa C++ : <br>";
for ($t=0; $t<$strlent4; $t++){
echo $MYSQL[$t]."<br>";
}
$perl = array ("1. Andi");
$strlent5 = count($perl);
echo "<br> Bahasa PERL : <br>";
for ($g=0; $g<$strlent5; $g++){
echo $MYSQL[$g]."<br>";
}

for ($z=2004; $z<2050; $z+=4){
echo $z."<br><br>";
}
?>
<?php
$awal = 1000000;
$discon = 20/100;
$akhir = $awal-($awal * $discon);
if ($awal<200000){
echo $awal;
} elseif ($awal>200000){
echo $akhir ."<br>";
} 
?>
<?php
$input= 40;
if (($input >= 90)&($input<=100)){
echo "A";
} elseif (($input >= 70)&($input<=89)){
echo "B";
} elseif (($input >= 50)&($input<=69)){
echo "C";
} elseif (($input >= 30)&($input<=49)){
echo "D";
} elseif (($input >= 0)&($input<=29)){
echo "E";
} 
?>
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
print_r($x + $y); // union of $x and $y
?>
<br>
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x + $y); // union of $x and $y
?>
<br>
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

echo $x[].$y[]; // union of $x and $y
?>
