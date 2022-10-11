<?php

require 'src/db.php';

$db=connectMysql($dsn, $dbuser, $dbpass);


if(!empty($_POST["email"])&&!empty($_POST["password"])){
    
    if(isset($_POST["email"])&&isset($_POST["password"])){
        
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        
        if (auth($db, $email, $password)){
            header('Location:?url=dashboard');
        } else {
            header('Location:?url=login');
        }
    }
}