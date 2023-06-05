<?php

function funkcija($number)
{
    static $a = 1;
    echo $a += $number,"\n";
}

$foo = 'funkcija';

for ($i=0; $i < 5; $i++) { 
    $foo(rand(1, 10));
}
/*
$foo(rand(1,10));
$foo(rand(1,10));
$foo(rand(1,10));
$foo(rand(1,10));
$foo(rand(1,10));
*/