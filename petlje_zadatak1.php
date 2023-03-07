<?php

$a = 1;

while ($a <= 10) {
    echo $a, "\n";
    $a++;
}

echo "-----\n";

for ($b = 1; $b <= 100; $b++) {
    if ($b % 2 == 0){
    echo $b, "\n";
    }
}