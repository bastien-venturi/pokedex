<?php
$title = $_GET['name'];
require_once __DIR__ . '/partials/header.php';
require './controllers/showController.php';
$pokemonDetails = fetchDetails();
/* echo '<pre>';
print_r($pokemonDetails);
echo '</pre>'; */
?>

<main>
    <div class="pokemon_container">
        <?php if ($pokemonDetails) : ?>
            <div class="pokemon_row">
                <h1><?= $pokemonDetails['name']; ?></h1>
                <ul>
                    <li class="<?= $pokemonDetails['primary_type_name']; ?>"><?= $pokemonDetails['primary_type_name']; ?></li>
                    <li class="<?= $pokemonDetails['secondary_type_name']; ?>"><?= $pokemonDetails['secondary_type_name']; ?></li>
                </ul>
                <div class="pokemon_stats">
                    <div>
                        <p class="label">HP</p>
                        <p class="results"><?= $pokemonDetails['hp'] ?></p>
                        <p class="label">Attack</p>
                        <p class="results"><?= $pokemonDetails['attack'] ?></p>
                        <p class="label">Defense</p>
                        <p class="results"><?= $pokemonDetails['defense'] ?></p>
                    </div>
                    <div>
                        <p class="label">SPD</p>
                        <p class="results"><?= $pokemonDetails['specific_defense'] ?></p>
                        <p class="label">SPA</p>
                        <p class="results"><?= $pokemonDetails['specific_attack'] ?></p>
                        <p class="label">Speed</p>
                        <p class="results"><?= $pokemonDetails['speed'] ?></p>
                    </div>
                </div>
                <h2>Evolutions</h2>
                <ul class="pokemon_evo">
                    <?php if (isset($pokemonDetails['evol_1_name'])) : ?>
                        <li class="evo_1"><img src="/public/img/pokemon/<?= $pokemonDetails['evol_1_name']; ?>.png"></li>
                    <?php endif; ?>
                    <?php if (isset($pokemonDetails['evol_2_name'])) : ?>
                        <li class="evo_2"><img src="/public/img/pokemon/<?= $pokemonDetails['evol_2_name']; ?>.png"></li>
                    <?php endif; ?>
                    <?php if (isset($pokemonDetails['evol_3_name'])) : ?>
                        <li class="evo_3"><img src="/public/img/pokemon/<?= $pokemonDetails['evol_3_name'] ?>.png"></li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="pokemon_row">
                <span class="type_id">#0000<?= $pokemonDetails['id'];  ?></span>
                <figure>
                    <img src="<?= $pokemonDetails['url_img']; ?>" alt="<?= $pokemonDetails['name']; ?> image">
                </figure>
            </div>
        <?php else : ?>
            <p>Pokémon not found!</p>
        <?php endif; ?>

    </div>
</main>

<?php
require_once __DIR__ . '/partials/footer.php';
?>