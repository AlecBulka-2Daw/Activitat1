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
    
</body>
</html>








