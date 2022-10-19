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
        <h3>OPTIONS</h3>
    </main>

    <form action="?url=dashboard" method="POST"><br>
        Seleccione de que color desea que sea la página de ahora en más:<br><br>
        <input type="radio" value="rojo" name="radio">Rojo<br>
        <input type="radio" value="verde" name="radio">Verde<br>
        <input type="radio" value="azul" name="radio">Azul<br><br>
        <input type="submit" value="Confirmar Color">
    </form>
    
</body>
</html>








