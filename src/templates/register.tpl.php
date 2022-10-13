<?php 
include 'partials/header.tpl.php';
include 'partials/nav.tpl.php';
?>
    <form action="?url=registeraction" method="POST">
        <input type="text" name="username" id="username" placeholder = "username">
        <input type="email" name="email" id="email" placeholder = "email">
        <input type="password" name="password" id="password" placeholder = "password">
        <button type="submit">Register</button>
    </form>
    <?php if(isset($_SESSION['error'])): ?>
        <p><?= $_SESSION['error'] ?></p>
    <?php endif; ?>
</body>
</html>