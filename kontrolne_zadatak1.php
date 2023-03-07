<?php

$a = 5;
$b = 10;
$c = 15;

if (($a < $b && $b < $c) || ($a > $b && $b > $c)) {
    echo "$b je između $a i $c\n";
}

else {
    echo "$b nije između $a i $c\n";
}