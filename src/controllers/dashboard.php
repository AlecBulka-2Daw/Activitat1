<?php

require 'src/render.php';

if (isset($_SESSION["lang"])){
    include $_SESSION["lang"];
    $title = $lang["dashboard"];
    $profile = $lang["profile"];
    $settings = $lang["settings"];
    $welcome = $lang["welcome"];
} else {
    $title = "Dashboard";
    $profile = "Profile";
    $settings = "Settings";
    $welcome = "Welcome";
}

$user = $_SESSION['user'];

echo render('dashboard', ['title' => $title, 'welcome' => $welcome, 'profile' => $profile, 'settings' => $settings, 'user' => $user]);