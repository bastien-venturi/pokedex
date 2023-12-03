<?php
$title = "Home";
require_once __DIR__ . '/partials/header.php';
?>

<main>
    <h2 class="view_title">Mes favoris pouette</h2>
    <div class="fav_container">
        <?php foreach ($data as $row) : ?>
            <a href="pokemon?name=<?= $row['poke_name'] ?>">
                <div class="card">
                    <figure><img src="<?= $row['url_img'] ?>" alt="pokemon_img"></figure>
                    <span class="type">#0000<?= $row['pokemon_id'] ?></span>
                    <h3><?= $row['poke_name'] ?></h3>
                    <?php if (isset($_SESSION['user'])) : ?>
                        <form action="../controllers/delFav.php" method="post">
                            <input type="hidden" name="pokeId" value="<?php echo $row['pokemon_id'] ?>">
                            <input type="submit" value="delete">
                        </form>
                    <?php endif; ?>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</main>

<?php

require_once __DIR__ . '/partials/footer.php';
