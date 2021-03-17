<?php

$a = 9 > 5;
$b = 10 != 10;
$c = $a && $b; //c = a and b would evaluate to true
$d = $a || $b;
$e = $b && $c;
$f = $a || $b;

$logic = array ($a, $b, $c, $d, $e, $f);

echo '<prev>';
var_dump ( $logic); //more information than echo or print
echo '</prev>';


//xor is at least one but not all statements are true results in true;
?>