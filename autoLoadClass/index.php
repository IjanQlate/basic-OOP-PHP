<?php

spl_autoload_register(function($class_name){
    include $class_name.".php";
});

$foo = New foo;
$bar = New bar;

$bar->sayHello();

?>