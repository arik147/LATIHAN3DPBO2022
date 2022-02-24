<?php

class Disk {

    // atribut
    private $type;
    private $capacity;
    private $price;

    // konstruktor

    function __construct($type = "",  $capacity = "", $price = 0)
    {
        $this->type = $type;
        $this->capacity = $capacity;
        $this->price = $price;
    }

    // setter
    function setType($type)
    {
        $this->type = $type;
    }
        
    function setCapacity( $capacity)
    {
        $this->capacity = $capacity;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }

    // getter
    function getType()
    {
        return $this->type;
    }
        
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