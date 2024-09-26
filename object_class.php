<?php
class Car{
    public $name;
    public $price;
    
    function getCarName($name){
        $this->name=$name;
        echo  $this->name;
    }
    function getCarPrice($price){
        $this->price=$price;
        return  $this->price;
    }
}

$result = new Car();
$result->getCarName("BMW");
echo $result->getCarPrice("49050$");
