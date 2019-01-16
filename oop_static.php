<?php

    class User{

        public static $minPassLength = 5;

        public static function ValidatePass($password){

            if (strlen($password) >= self::$minPassLength) return true;
            else return false;

        }

    }

    $password = "Azri3000";

    if (User::ValidatePass($password)) echo "Password is valid <br />";
    else "Password is NOT valid<br />";

    echo User::$minPassLength;

?>