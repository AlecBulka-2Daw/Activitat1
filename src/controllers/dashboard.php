<?php

require 'src/render.php';

$title = "Dashboard";
$user = $_SESSION['user'];

echo render('dashboard', ['title' => $title, 'user' => $user]);