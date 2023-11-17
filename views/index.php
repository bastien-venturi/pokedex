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
        echo '<div class="card">';
        if($_SESSION['user']){
            echo '<form action="../controllers/addFav.php" method="post">';
            echo '<input type="hidden" name="pokeId" value="' . $row['id'] . '">';
            echo '<input type="submit" value="+">';
            echo '</form>';
        }
        echo '<figure><img src="' . $row['url_img'] . '" alt="pokemon_img">';
        echo '</figure>';
        echo '<span class="type">#0000' . $row['id'] . '</span>';
        echo '<h3>' . $row['name'] . '</h3>';
        echo '<ul>';
        echo '<li class="' . $row['primary_type_name'] . '">' . $row['primary_type_name'] . '</li>';
        echo '<li class="' . $row['secondary_type_name'] . '">' . $row['secondary_type_name'] . '</li>';
        echo '</ul>';
        echo '</div>';
    }
    ?>
</div>

<?php
require_once __DIR__ . '/partials/footer.php';
?>