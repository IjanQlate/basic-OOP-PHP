<?php

class User{

    //properties or attributes by default is public
    public $id;
    public $username;
    public $password;
    public $email;

    public function __construct($username,$password){
        $this->username = $username;  
        $this->password = $password;
        //echo "Constructor Called";
    }

    public function register(){         //function in class is called method, public is accessible outside and inside class
        echo "User Register!";
    }

    public function login(){
        $this->auth_user();
    }

    public function auth_user(){
        echo "$this->username is authenticated";
    }

    public function __destruct(){
        //echo "Destructor Called";
    }

}

$User = new User("s54197","Azri3000");

//$User->register();
echo $User->username;

?>

