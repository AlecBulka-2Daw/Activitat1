<?php

require 'src/render.php';

$title = "DAW School";

echo render('home', ['title' => $title]);