<?php 
$operatore1 = 3;
$operatore2= 5.10;
$operatore3 = (int) '10';


$risult= $operatore2 + $operatore3;

var_dump(is_float($operatore1));
var_dump(is_float($operatore2));
var_dump(is_int($operatore3));

echo $operatore1 + $operatore3;

var_dump(is_string($risult));


var_dump( abs($operatore1));

echo min(0, 56, 23, 78, 12, 100);
echo max(0, 56, 23, 78, 12, 100);

echo sqrt(25);
echo round(0.51);
echo rand(0, 100);

echo $operatore1 + $operatore2;
echo $operatore1 - $operatore2;
echo $operatore1 * $operatore2;

