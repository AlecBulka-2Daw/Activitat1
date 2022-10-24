<?php

require 'src/render.php';

if (isset($_SESSION["lang"])){
    include $_SESSION["lang"];
    $title = $lang["profile"];
    $welcome = $lang["welcome"];
    $profile = $lang["profile"];
    $settings = $lang["settings"];
    $username = $lang["username"];
    $email = $lang["email"];
} else {
    $title = "Profile";
    $welcome = "Welcome";
    $profile = "Profile";
    $settings = "Settings";
    $username = "Username: ";
    $email = "Email: ";
}

$user = $_SESSION['user'];

echo render('profile', ['title' => $title, 'welcome' => $welcome, 'profile' => $profile, 'settings' => $settings, 'user' => $user,
'username' => $username, 'email' => $email]);