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

    <h2><?= $username; ?> <?= $user->username; ?> </h2>
    <h2><?= $email; ?> <?= $user->email; ?> </h2>
    
</body>
</html>