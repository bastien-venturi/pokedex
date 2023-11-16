<?php
$title = "Home";
require_once __DIR__ . '/partials/header.php';
?>

<main>
    <h1>Pokedex - Homepage</h1>
    <p>Hello <strong><?php echo $user['name'] ?></p></strong>
    <a href="/views/show.php?name=Pikachu">Pikachu</a>
    <a href="/login">Login</a>
</main>

<?php
require_once __DIR__ . '/partials/footer.php';
?>