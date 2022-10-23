<?php

require 'src/render.php';

$title = "Profile";
$user = $_SESSION['user'];

echo render('profile', ['title' => $title, 'user' => $user]);