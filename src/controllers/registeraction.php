<?php

require 'src/db.php';

$db=connectMysql($dsn, $dbuser, $dbpass);


if(!empty($_POST["username"])&&!empty($_POST["email"])&&!empty($_POST["password"])){
    
    if(isset($_POST["username"])&&isset($_POST["email"])&&isset($_POST["password"])){
        
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        
        if (register($db, $email, $password, $username)){
            $_SESSION['register'] = "User created successfully";
            header('Location:?url=login');
        } else {
            $_SESSION['register'] = "Username or email already exists";
            header('Location:?url=login');
        }
    }
}