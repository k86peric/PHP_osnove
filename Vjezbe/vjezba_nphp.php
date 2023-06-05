<?php

class Osoba{
    public string $ime;
    public function getIme($ime)
    {
        return $this->ime=$ime;
    }
}

$osoba=new Osoba();
$osoba->ime='Ivo';

var_dump($osoba);