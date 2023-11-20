<?php
$title = "Home";
require_once __DIR__ . '/partials/header.php';

// $title = $_GET['name'];
// echo $name




?>

<main>
    <h2 class="view_title">Mes favoris</h2>
    <table>
        <?php foreach ($data as $row) : ?>
            <tr>
                <td><img src="<?php echo $row['url_img'] ?>" alt="pokemon_img" class="fav_pkmn"></td>
                <td><?php echo $row['name'] ?></td>
                <td>
                    <ul>
                        <li>hp : <?php echo $row['hp'] ?></li>
                        <li>attack : <?php echo $row['attack'] ?></li>
                        <li>defense : <?php echo $row['defense'] ?></li>
                        <li>specific_defense : <?php echo $row['specific_defense'] ?></li>
                        <li>specific_attack : <?php echo $row['specific_attack'] ?></li>
                        <li>speed : <?php echo $row['speed'] ?></li>
                    </ul>
                </td>
                <td>
                    <form action="../controllers/delFav.php" method="post">
                        <input type="hidden" name="pokeId" value="<?php echo $row['pokemon_id'] ?>">
                        <input type="submit" value="delete">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</main>

<?php

require_once __DIR__ . '/partials/footer.php';
