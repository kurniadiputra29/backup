<?php
function writeMsg() {
    echo "Hello world!";
}

writeMsg(); // call the function atau memanggil fungsi
?><br>
<?php
function Name($name) {
    echo "my name is $name.<br>";
}
Name("Jani");
Name("Hege");
Name("Stale");
Name("Kai Jim");
Name("Borge");
?><br>
<?php
function familyName($fname, $year) {
    echo "$fname Refsnes. Born in $year<br>";
}
familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");
?><br>
<?php
function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
}
setHeight(350);
setHeight(); // will use the default value of 50 (ngambil di atasnya)
setHeight(135);
setHeight(80);
?><br>
<?php
function sum($x, $y) {
    $z = $x + $y;
    return $z;// ini pakai return tidak sama dengan echo
}
echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
?><br>



