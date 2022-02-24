<?php

class Ram {

    // atribut
    private $capacity;
    private $price;

    
    // konstruktor

    function __construct($capacity = "", $price = 0)
    {
        $this->capacity = $capacity;
        $this->price = $price;
    }

    // setter
    function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }

    // getter
    function getCapacity()
    {
        return $this->capacity;
    }

    function getPrice()
    {
        return $this->price;
    }
}

?>