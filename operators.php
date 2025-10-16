<?php
// aritmetik oparatörler : + - * / %

echo  (5 % 2 )."<br>";
echo (142 % 7)."<br>";


// karşılaştırma operatörleri : <, > , <= ,>= , ==, !=

echo (5 >3)."<br>";

var_export(5 >3);
var_export(5 <3);
var_export(5 == 5);
var_export(5 != 5);

echo "<hr>";
// mantıksal operatörler : && -> ve operatörü, || -> veya  !-> değil

$logic = (5>= 6 && 3==3);
//          false  ve true =false
var_export($logic);
echo "<hr>";

$logic = (5<= 6 && 3==3);
var_export($logic);
echo "<hr>";

$logic = (5>= 6 || 3==3);
//          false  veya true =false
var_export($logic);
echo "<hr>";

$logic = (5>= 6 || 3==3);
//          false  veya true =false
var_export(!$logic);
echo "<hr>";


?>