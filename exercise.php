<?php


class Beverage
{

    public string $color;
    public float $price;
    public string $temperature;


    public function __construct(string $kleur, float $prijs, string $temperatuur = "cold")
    {
        //errors when adding typehinting to lines 12-14, why?
        $this->color = $kleur;
        // can call it kleur instead of color cause its a placeholder variable only in this construct
        $this->price = $prijs;
        $this->temperature = $temperatuur;
        //$this is the placeholder object here and we access the temperature

    }

    public function getInfo()
    {

        return "This beverage is " . $this->temperature . " and " . $this->color;
    }

}

$cola = new Beverage("black", 2);

echo $cola->getInfo();

class Beer extends Beverage
{

    public string $name;
    public float $alcoholPercentage;


    function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = "cold")
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;

    }

    function getAlcoholPercentage()
    {

        return $this->alcoholPercentage;
    }

    function getInfo()
    {

        return parent::getInfo() . " and the drink " . $this->alcoholPercentage;
    }

}

$duvel = new Beer("blond", 3.5, "Duvel", 8.5);
echo "<br>";
//scuffed Jens break
echo $duvel->getAlcoholPercentage();
echo "<br>";
echo $duvel->getInfo();

