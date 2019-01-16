<?php

abstract Class Animal{

    public $name;
    public $color;

    public function describe(){
        return $this->name." is ".$this->color;
    }

    abstract public function makeSound();       //abstract method must be under abstract class

}

class Duck extends Animal{

    public function describe(){
        return parent::describe();
    }

    public function makeSound(){
        return 'Quack';
    }

}

class Dog extends Animal{

    public function describe(){
        return parent::describe();
    }

    public function makeSound(){
        return 'Bark';
    }

}

$animal = New Duck;
$animal->name = "Donald Duck";
$animal->color = "yellow";

echo $animal->describe();


?>