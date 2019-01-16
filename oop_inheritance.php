<?php

class First{
    protected $name = "John Doe";
}

class Second extends First{
    public function GetName(){
        echo $this->name;
    }
}

$test = New Second;
$test->GetName();



?>