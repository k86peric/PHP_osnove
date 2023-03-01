<?php

$a = 10;
$b = 15;
$c = "string1 ";
$d = "string2 ";

echo 'a+b= ', $a + $b, "\n";
echo 'a-b= ', $a - $b, "\n";
echo 'a*b= ', $a * $b, "\n";
echo 'a/b= ', $a / $b, "\n";
echo 'a%b= ', $a % $b, "\n";

echo "\n";

$f = $c . $d;

echo 'konkatenacija: ', $f, "\n";
echo "\n";
echo 'kombinirano: ', $a += $b, "\n";
echo "\n";
echo 'usporedba: ', var_dump($a > $b), "\n";
echo "\n";
echo ++$a, "\n";
echo --$b, "\n";