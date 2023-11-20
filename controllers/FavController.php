<?php

require_once __DIR__ . '/../queries/connectDb.php';
session_start();
$user = $_SESSION['user']['id'];
var_dump($user);
$bdd = connectDb();

$query = $bdd->prepare('SELECT  name,url_img,hp,attack,defense, specific_defense, specific_attack,speed,type_primary,type_secondary
                FROM fav
                INNER JOIN  pokemons ON fav.pokemon_id = pokemons.id
                INNER JOIN stats ON stats.id = pokemons.stats_id
                WHERE user_id = :userId');
$query->bindValue(':userId', $user);
$query->execute();
$data = $query->fetchAll();

var_dump($data);

require_once __DIR__ . '/../views/fav.views.php';