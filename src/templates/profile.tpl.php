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

    <h1><?= $user->username; ?> </h1>
    
</body>
</html>