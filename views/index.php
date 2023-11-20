<?php
$title = "Home";
require_once __DIR__ . '/partials/header.php';
?>

<main>
    <?php if (isset($_SESSION['user'])) : ?>
        <h1 class="greetings">Hello <?php echo $name ?></h1>
    <?php endif; ?>

    <div class="index_container">
        <?php foreach ($data as $row) : ?>
            <a href="index.php/pokemon?name=<?= $row['name'] ?>">
                <div class="card">
                    <?php if (isset($_SESSION['user'])) : ?>
                        <form action="../controllers/addFav.php" method="post">
                            <input type="hidden" name="pokeId" value="<?= $row['id'] ?>">
                            <input type="submit" value="♥">
                        </form>
                    <?php endif; ?>
                    <figure><img src="<?= $row['url_img'] ?>" alt="pokemon_img"></figure>
                    <span class="type">#0000<?= $row['id'] ?></span>
                    <h3><?= $row['name'] ?></h3>
                    <ul>
                        <li class="<?= $row['primary_type_name'] ?>"><?= $row['primary_type_name'] ?></li>
                        <li class="<?= $row['secondary_type_name'] ?>"><?= $row['secondary_type_name'] ?></li>
                    </ul>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</main>

<?php
require_once __DIR__ . '/partials/footer.php';
?>