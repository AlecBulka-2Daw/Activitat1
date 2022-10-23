<?php 
include 'partials/header.tpl.php';
?>
    <header>
        <h1><?= $title; ?></h1>
        <hr>
    </header>
    <?php include 'partials/nav.tpl.php'; ?>
    <main>
        <h2>
        Welcome <?= $user->username; ?> 
        </h2>
        <div>
            <a href="?url=profile">Profile</a>
            <a href="?url=settings">Settings</a>
        </div>
    </main>

    <form action="?url=settings" method="POST"><br>
        Seleccione de que color desea que sea la página de ahora en más:<br><br>
        <input type="radio" value="rojo" name="radio">Rojo<br>
        <input type="radio" value="verde" name="radio">Verde<br>
        <input type="radio" value="azul" name="radio">Azul<br><br>
        <input type="submit" value="Confirmar Color">
    </form>
    
</body>
</html>