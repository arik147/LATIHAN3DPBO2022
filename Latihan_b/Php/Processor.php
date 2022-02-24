<?php

class Processor {

    // atribut
    private $name;
    private $price;

    
    // konstruktor
    function __construct($name = "", $price = 0)
    {
        $this->name = $name;
        $this->price = $price;
    }

    // setter
    function setName($name)
    {
        $this->name = $name;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }

    // getter
    function getName()
    {
        return $this->name;
    }

    function getPrice()
    {
        return $this->price;
    }
}

?>