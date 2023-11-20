<?php

require_once __DIR__ . '/../queries/connectDb.php';
$user = $_SESSION['user']['id'];
$bdd = connectDb();

$query = $bdd->prepare('SELECT fav.pokemon_id, pokemons.name as poke_name, url_img, hp, attack, defense, specific_defense, specific_attack, speed, pokemons.type_primary, pokemons.type_secondary, type.name as type_name
                FROM fav
                INNER JOIN  pokemons ON fav.pokemon_id = pokemons.id
                INNER JOIN stats ON pokemons.stats_id = stats.id
                INNER JOIN type ON pokemons.type_primary = type.id
                WHERE user_id = :userId');
$query->bindValue(':userId', $user);
$query->execute();
$data = $query->fetchAll();


require_once __DIR__ . '/../views/fav.views.php';

