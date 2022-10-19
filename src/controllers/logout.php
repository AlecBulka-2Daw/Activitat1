<?php

if (isset($_COOKIE['user'])) {
    setcookie("user", NULL, time()-60);
}

session_destroy();

header('Location:?url=home');