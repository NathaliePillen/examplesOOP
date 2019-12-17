<?php

class Person {

// properties
private $name;
public $eyeColor;
public $age;


public static $drinkingAge = 21;

public static function setDrinkingAge($newDA){
    self::$drinkingAge = $newDA;
}


//constructor
public function __construct($name, $eyeColor, $age){
    $this-> name = $name;
    $this-> eyeColor = $eyeColor;
    $this -> age = $age;
    
}

// setter
public function setName($name){
    $this -> name = $name;
}

// getter
public function getName(){
    return $this -> name;
}

}



?>