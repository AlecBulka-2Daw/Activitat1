<?php 
include 'partials/header.tpl.php';
include 'partials/nav.tpl.php';
?>
    <?php if (isset($_COOKIE['user'])):?>
        <?php $user = explode(";", $_COOKIE['user'])?>
        <button>
            <a href="?url=logaction">Continue as <?=$user[2]; ?> </a>
        </button>
        <button>
            <a href="?url=logout">Logout</a>
        </button>
    <?php else: ?>


    <form action="?url=logaction" method="POST">
        <input type="email" name="email" id="email" placeholder = "email">
        <input type="password" name="password" id="password" placeholder = "password"><br>
        <input type="checkbox" name="save-user" id="save-user" value=1>Recordeu-me en aquest equip<br>
        <button type="submit">Login</button>
    </form>
    <?php if(isset($_SESSION['error'])): ?>
        <p><?= $_SESSION['error'] ?></p>
    <?php endif; ?>
    <?php endif; ?>
</body>
</html>