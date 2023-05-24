<?php
namespace App\Videostore;

class Genre {

    private string $ID_Naziv;    
    
    public function __construct(private string $Naziv)
    {}
        
    public function getName(bool $isUpperCaseRequest = false): string
    {
        return $isUpperCaseRequest ? strtoupper($this->Naziv)
        : strtolower($this->Naziv);
    }
}