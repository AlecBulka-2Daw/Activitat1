<?php

require 'src/render.php';

$title = "Settings";
$user = $_SESSION['user'];

if (isset($_POST['radio'])){
    if ($_POST['radio']=="rojo")
    setcookie($user->id . "color",$user->id . ";" . "#ff0000",time()+60*60*24*365,"/");
     elseif ($_POST['radio']=="verde")
     setcookie($user->id . "color",$user->id . ";" . "#00ff00",time()+60*60*24*365,"/");
      elseif ($_POST['radio']=="azul")
      setcookie($user->id . "color",$user->id . ";" . "#0000ff",time()+60*60*24*365,"/");
}

echo render('settings', ['title' => $title, 'user' => $user]);