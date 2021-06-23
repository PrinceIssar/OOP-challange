<?php


use Beverage as GlobalBeverage;

class Beverage
{

    private string $color;
    private float $price;
    private string $temperature;
    private static int $timesServed = 0;


    public function __construct(string $kleur, float $prijs, string $temperatuur = "cold")
    {
        //errors when adding typehinting to lines 12-14, why?
        $this->color = $kleur;
        // can call it kleur instead of color cause its a placeholder variable only in this construct
        $this->price = $prijs;
        $this->temperature = $temperatuur;
        //$this is the placeholder object here and we access the temperature
        self::$timesServed += 1;
    }

    public function getInfo()
    {

        return "This beverage is " . $this->temperature . " and " . $this->color . " and the cost is " . $this->price;
    }

    function setColor($color)
    {
        $this->color = $color;
    }

    //put it here cause private, has to be in beverage class
    public function getColor()
    {

        return $this->color;
    }

    public static function getTotalServed()
    {
        return self::$timesServed;
    }
}


class Beer extends Beverage
{

    private string $name;
    private float $alcoholPercentage;


    function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature = "cold")
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;

    }

    public function getAlcoholPercentage()
    {

        return $this->alcoholPercentage;
    }

    public function getName()
    {
        return $this->name;
    }


    function getInfo()
    {

        return parent::getInfo() . " and the alcoholpercentage is " . $this->alcoholPercentage;
    }

    public function beerInfo()
    {
        return "Hi, I'm " . $this->name . " and I have an alcoholic percentage of " . $this->alcoholPercentage . " and I have a " . $this->getColor() . " color.";

    }


}

$duvel = new Beer("blond", 3.5, "Duvel", 8.5);
echo "<br>";
//scuffed Jens break
echo $duvel->getAlcoholPercentage();
echo "<br>";
echo $duvel->getInfo();
echo "<br>";

$duvel->setColor("light");
echo $duvel->getInfo();
echo "<br>";
echo $duvel->beerInfo();
echo "<br>";
$cara = new Beverage("piskleur", 0.1);
$jupke = new Beverage("yellow", 2.5);
$maes = new Beverage("Brown", 3);
echo Beverage::getTotalServed();