<?php
$title = "Home";
require_once __DIR__ . '/partials/header.php';
?>

<main>
    <h1>Pokedex - Homepage</h1>
    <p>Hello <strong><?php echo $name ?></p></strong>
    <a href="index.php/pokemon?name=Pikachu">Pikachu</a>
    <a href="index.php/login">Login</a>
    <a href="index.php/User">User</a>
</main>

<div class="container">
    <?php
    foreach ($data as $row) {
        echo '<a href="#">';
        echo '<div class="card">';
        echo '<figure><img src="' . $row['url_img'] . '" alt="pokemon_img">';
        echo '</figure>';
        echo '<span>#0000' . $row['id'] . '</span>';
        echo '<h3>' . $row['name'] . '</h3>';
        echo '<ul>';
        echo '<li>' . $row['type_primary'] . '</li>';
        echo '<li>' . $row['type_secondary'] . '</li>';
        echo '</ul>';
        echo '<a>';
    }
    ?>
</div>

<?php
require_once __DIR__ . '/partials/footer.php';
?>