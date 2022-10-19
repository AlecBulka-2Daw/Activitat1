<?php

require 'src/render.php';

$title = "School";

echo render('home', ['title' => $title]);