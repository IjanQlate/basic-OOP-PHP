<?php

class People{

    public $person1 = "Azri";
    public $person2 = "Azizi";
    public $person3 = "Hapizan";

    protected $person4 = "Johari";
    private $person5 = "Faiz Jamingan";

    public function iterateObject(){
        foreach($this as $key => $value){
            print "$key => $value\n";
        }
    }

}

$people = New People;
$people->iterateObject();

?>