<?php

require 'src/render.php';

if (isset($_SESSION["lang"])){
    include $_SESSION["lang"];
    $title = $lang["settings"];
    $welcome = $lang["welcome"];
    $profile = $lang["profile"];
    $settings = $lang["settings"];
    $selectC = $lang["selectC"];
    $selectL = $lang["selectL"];
    $colors = $lang["colors"];
    $langs = $lang["langs"];
    $btnC = $lang["btnC"];
    $btnL = $lang["btnL"];
} else {
    $title = "Settings";
    $welcome = "Welcome";
    $profile = "Profile";
    $settings = "Settings";
    $selectC = "Select color:";
    $selectL = "Select Language:";
    $colors = ["Red", "Green", "Blue"];
    $langs = ["English", "Spanish"];
    $btnC = "Confirm Color";
    $btnL = "Confirm Language";
}

$user = $_SESSION['user'];

if (isset($_POST['color'])){
    if ($_POST['color']=="red")
    setcookie($user->id . "color",$user->id . ";" . "#ff0000",time()+60*60*24*365,"/");
     elseif ($_POST['color']=="green")
     setcookie($user->id . "color",$user->id . ";" . "#00ff00",time()+60*60*24*365,"/");
      elseif ($_POST['color']=="blue")
      setcookie($user->id . "color",$user->id . ";" . "#0000ff",time()+60*60*24*365,"/");
}

if (isset($_POST['lang'])){
    if ($_POST['lang']=="en")
    setcookie($user->id . "lang",$user->id . ";" . "en",time()+60*60*24*365,"/");
     elseif ($_POST['lang']=="es")
     setcookie($user->id . "lang",$user->id . ";" . "es",time()+60*60*24*365,"/");
}

echo render('settings', ['title' => $title, 'welcome' => $welcome, 'profile' => $profile, 'settings' => $settings, 'user' => $user,
'selectC' => $selectC, 'selectL' => $selectL, 'colors' => $colors, 'langs' => $langs, 'btnC' => $btnC, 'btnL' => $btnL]);