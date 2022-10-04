<?php

require 'src/db.php';

$db=connectMysql($dsn, $dbuser, $dbpass);


if(!empty($_POST["email"])&&!empty($_POST["password"])){
    if(isset($_POST["email"])&&isset($_POST["password"])){
        $email = $_REQUEST["email"];
        $password = $_REQUEST["password"];
        if (auth($db, $email, $password)){

        }
    }
}