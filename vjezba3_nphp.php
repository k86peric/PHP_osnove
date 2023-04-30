<?php
interface paljenjeOnOff{
    public function paljenjeOn(): string;
    public function paljenjeOff(): string;
}

abstract class automobili{
    protected int $kmpt = 500;
    public function __construct() 
    {}
    
    public function setKmpt(int $kmpt): void
    {
        $this->kmpt = $kmpt;
    }
    
    public function getKmpt(): int
    {
        return $this->kmpt;
    }
}

class Chevrolet extends automobili implements paljenjeOnOff {
    
    public function __construct(protected int $kmpt)
    {
        parent::__construct();
    }
    
    public function paljenjeOn(): string
    {
        $paljenjeOn = "Chevrolet se pali... \n";

        return $paljenjeOn;
    }
        
    public function kmpt(): string
    {
        return "Chevrolet dosegne {$this->kmpt} na puni rezervoar.\n";
    }

    public function paljenjeOff(): string
    {
        return "Chevrolet se gasi... \n";
    }

    public function getKmpt(): int
    {
        return $this->kmpt;
    }
}

class Ford extends automobili implements paljenjeOnOff {
    public function __construct(protected int $kmpt)
    {
        parent::__construct();
    }
 
    public function paljenjeOn(): string
    {
        $paljenjeOn = "Ford se pali... \n";

        return $paljenjeOn;
    }
        
    public function kmpt(): string
    {
        return "Chevrolet dosegne {$this->kmpt} na puni rezervoar.\n";
    }

    public function paljenjeOff(): string
    {
        return "Ford se gasi... \n";
    }

    public function getKmpt(): int
    {
        return $this->kmpt;
    }
}

class radio implements paljenjeOnOff{
    public function paljenjeOn(): string
    {
        return "Dok svira radio.... \n";
    }

    public function paljenjeOff(): string
    {
        return "***Sound of silence***\n";
    }
}

function sayKmpt($groupmember){
    echo "{$groupmember->kmpt()}";

}

$chevrolet = new Chevrolet(789);
$ford = new Ford(879);
$radio = new radio();

$group = [$chevrolet, $ford];

foreach ($group as $groupmember){
    echo $groupmember->paljenjeOn();
    sayKmpt($groupmember);
    echo $groupmember->paljenjeOff();
    echo "\n";
}

echo $radio->paljenjeOn();
echo $radio->paljenjeOff();