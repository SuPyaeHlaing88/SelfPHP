<?php

class Animal{
    public $name;
    public $color;

    public function __construct($animalName, $animalColor)
    {
        $this->name= $animalName;
        $this->color = $animalColor;
    }

    public function sleep($name){
        $this->name= $name;
        echo $name."Good Night...";
    }
}

class Dog extends Animal{
    
public function greeting(){
    echo "hello dog!";
}

}
$animal = new Animal("Shew War", "YEllow");
echo $animal->name;
$dog= new Dog("aung net", "black");
$dog->greeting();
$dog->sleep("phoe");