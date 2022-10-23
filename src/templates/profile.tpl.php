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

    <h2>Username: <?= $user->username; ?> </h2>
    <h2>Email: <?= $user->email; ?> </h2>
    
</body>
</html>