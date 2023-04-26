<?php

class automobil {
        public function __construct(
            protected string $br_Sas,
            protected string $model,
            protected string $proizvodjac
        )
    {
        echo "Created car with {$this->br_Sas} S/N is being taken to the crusher.\n";
    }

    public function setBrSas(string $br_Sas): void
    {
        $this->br_Sas = $br_Sas;
    }

    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    public function setProizvodjac(string $proizvodjac): void
    {
        $this->proizvodjac = $proizvodjac;
    }
    public function getSas(): string
    {
        return $this->br_Sas;
    }

    public function __destruct()
    {
        echo "$this->br_Sas is getting recycled...\n";
    }
}

$automobil = new automobil('874563985gsdjkh3', 'spark', 'chevrolet');