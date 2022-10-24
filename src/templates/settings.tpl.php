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
        <?= $welcome; ?> <?= $user->username; ?> 
        </h2>
        <div>
            <a href="?url=profile"><?= $profile; ?></a>
            <a href="?url=settings"><?= $settings; ?></a>
        </div>
    </main>

    <form action="?url=settings" method="POST"><br>
    <?= $selectC; ?><br><br>
        <input type="radio" value="red" name="color"><?= $colors[0]; ?><br>
        <input type="radio" value="green" name="color"><?= $colors[1]; ?><br>
        <input type="radio" value="blue" name="color"><?= $colors[2]; ?><br><br>
        <input id="submit" type="submit" value="<?= $btnC; ?>">
    </form>

    <form action="?url=settings" method="POST"><br>
    <?= $selectL; ?><br><br>
         <input type="radio" value="en" name="lang"><?= $langs[0]; ?><br>
         <input type="radio" value="es" name="lang"><?= $langs[1]; ?><br><br>
         <input id="submit" type="submit" value="<?= $btnL; ?>">
    </form>
    
</body>
</html>