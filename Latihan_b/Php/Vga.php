<?php

class Vga {

    // atribut
    private $brand;
    private $type;
    private $price;


    // konstruktor
    function __construct($brand = "", $type = "", $price = 0)
    {
        $this->brand = $brand;
        $this->type = $type;
        $this->price = $price;
    }

    // setter
    function setBrand($brand)
    {
        $this->brand = $brand;
    }
        
    function setType($type)
    {
        $this->type = $type;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }

    // getter
    function getBrand()
    {
        return $this->brand;
    }
        
    function getType()
    {
        return $this->type;
    }

    function getPrice()
    {
        return $this->price;
    }
}


?>