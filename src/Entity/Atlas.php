<?php

interface CountryInterface {
    public function getLanguages():string;
}

class Language {
    private string $name;

    public function getName():string
    {
        return $this->name;
    }

    public function setName(string $value):void
    {
        $this->name = $value;
    }

}

abstract class Country implements CountryInterface
{

    public function __construct()
    {
        
    }

    private string $name;
    private string $currency;
    private int $population;
    private string $leaderType;
    private string $languages;
    private array $languages2 = array();

    public function getName():string
    {
        return $this->name;
    }

    public function setName(string $value):void
    {
        $this->name = $value;
    }

    public function getCurrency():string
    {
        return $this->currency;
    }

    public function setCurrency(string $value):void
    {
        $this->currency = $value;
    }

    public function getPopulation():string
    {
        return $this->population;
    }

    public function setPopulation(string $value):void
    {
        $this->population = $value;
    }

    abstract public function getLeaderType():string;

    public function setLeaderType(string $value):void
    {
        $this->leaderType = $value;
    }

    public function addLanguage(Language $value):void
    {
        array_push($this->languages2, $value->getName());
    }

    public function getLanguage():void
    {
        print_r($this->languages2);
    }

}


class France extends Country
{
    const CAPITAL = 'Paris';

    public function getLeaderType():string
    {
        return "President";
    }
    
    public function getLanguages():string
    {
        return "Français";
    }
    
}

$france = new France();
$france->setName('Bagnolet');
$france->setCurrency('Euro');
$france->setPopulation(1000000);
//echo France::CAPITAL;
$france->getLeaderType();

class UnitedKimgdom extends Country
{
    const CAPITAL = 'London';

    public function getLeaderType():string
    {
        return "Queen";
    }

    public function getLanguages():string
    {
        return "English";
    }
    
}

$UK = new UnitedKimgdom();
$UK->setName('Londre');
$UK->setCurrency('Livre');
$UK->setPopulation(1000000);
//echo UnitedKimgdom::CAPITAL;
$UK->getLeaderType();


class Belgium extends Country
{
    const CAPITAL = 'Bruxelles';

    public function getLeaderType():string
    {
        return "Gouvernement fédéral";
    }

    public function getLanguages():string
    {
        return "Belge";
    }
    
}

$Belgium = new Belgium();
$Belgium->setName('Bruxelles');
$Belgium->setCurrency('Euro');
$Belgium->setPopulation(1000000);
//echo Belgium::CAPITAL;
$Belgium->getLeaderType();

$french = new Language();
$french->setName("french");
$dutch = new Language();
$dutch->setName("dutch");
$belgium = new Language();
$belgium->setName("belgium");

$Belgium->addLanguage($french);
$Belgium->addLanguage($dutch);
$Belgium->addLanguage($belgium);

echo $Belgium->getLanguage();
