<?php 
include 'partials/header.tpl.php';
?>
    <header>
        <h1><?= $title; ?></h1>
        <hr>
    </header>
    <?php include 'partials/nav.tpl.php'; ?>
    <main>
        <?php foreach ($alumnes as $alumne): ?>
            <p><?= $alumne; ?></p>
        <?php endforeach; ?>    
    </main>
</body>
</html>