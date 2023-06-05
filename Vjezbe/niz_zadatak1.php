<?php

$primeNumbers = [2, 3, 5, 7, 11];

var_dump(isset($primeNumbers[2]));
echo $primeNumbers[2];
echo("\n");

$primeNumbers[] = 13;

echo(count($primeNumbers));
echo("\n");
var_dump($primeNumbers);
echo("\n");

arsort($primeNumbers);
var_dump($primeNumbers);