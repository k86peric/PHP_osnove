<?php

function fullname($ime = 'ime', $prezime = 'prezime')
{
    return "$ime $prezime\n";
}

$punoime = fullname();

echo strtoupper($punoime);

/*
 function imePrezime($name, $surname) {

        $spojeno = $name . " " . $surname;
        $spojeno = strtoupper($spojeno);
        return $spojeno;
    }
   
    $rezultat = imePrezime("ana", "anic");
    echo $rezultat; 
*/
