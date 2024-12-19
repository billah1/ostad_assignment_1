<?php

define("USERNAME","admin");
define("PASSWORD","12345678");

echo "Enter Username:";
$inputUsername = readline();


echo  "Enter Password :";
$inputPassword  = readline();


if($inputUsername === USERNAME && $inputPassword === PASSWORD){
    echo "login Successfully ..";
}else{
    echo "Invalid Username or Password";
}