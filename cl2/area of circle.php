<?php
$r = 12; $d = NULL; $c = NULL; $a = NULL;
// $r = radius, $d = diameter, $c = circumference, $a = area
//নিচের মান গুলো সূত্রের মাধ্যমে বের করব.
$d = 2 * $r;
$c = 2 * 3.14 * $r;
$a = 3.14 * ($r * $r);

echo "\nDiameter       = " . $d . " units"; 
echo"<br>";
echo "\nCircumference  = " . $c . " units";
echo"<br>";
echo "\nArea           = " . $a . " sq. units";
echo"<br>";
?> 