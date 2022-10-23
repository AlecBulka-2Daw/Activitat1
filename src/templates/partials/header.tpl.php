<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/style/style.css">
    <title>DAW School</title>
</head>
<body <?php if (isset($_SESSION["user"])){
                if (isset($_COOKIE[$_SESSION["user"]->id . "color"])){
                    $color = explode(";", $_COOKIE[$_SESSION["user"]->id . "color"]);
                    if ((int)$color[0] == $_SESSION["user"]->id) {
                        echo "style=\"background:$color[1]\"";
                    }
                }
            }
    ?>>