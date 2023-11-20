<?php

require_once __DIR__ . '/partials/header.php';
?>

<main>
    <h2 class="view_title"> Login </h2>
    <form class="register_form" action="/../authentification/auth.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Name">
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Password">
        <input type="submit">
    </form>
</main>

<?php
require_once __DIR__ . '/partials/footer.php';
?>