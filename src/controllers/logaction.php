<?php

require 'src/db.php';

$db = connectMysql($dsn, $dbuser, $dbpass);

if (isset($_COOKIE['user'])) {
    $user = explode(";", $_COOKIE['user']);
    $stmt=$db->prepare("SELECT * FROM users WHERE email=:email");
    $stmt->execute([":email"=>$user[0]]);
    $_SESSION['user'] = $stmt->fetchAll()[0];
    header('Location:?url=dashboard');
}


if (!empty($_POST["email"]) && !empty($_POST["password"])) {

    if (isset($_POST["email"]) && isset($_POST["password"])) {

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        if (auth($db, $email, $password)) {
            if (isset($_POST["save-user"])){
                if ((filter_input(INPUT_POST, 'save-user') == 1)) {
                    setcookie("user", $_SESSION['user']->email . ";" . $_SESSION['user']->password . ";" . $_SESSION['user']->username, time()+60*60*24*365, "/");
                }
            }
            header('Location:?url=dashboard');
        } else {
            $_SESSION['error'] = "Email or password is incorrect";
            header('Location:?url=login');
        }
    }
}
