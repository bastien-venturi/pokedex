<?php

require './queries/connectDb.php';

function fetchDetails()
{
    $pdo = connectDb();
    $pokemonName = htmlspecialchars($_GET['name']);

    try {
        $stmt = $pdo->prepare("
        SELECT p.*, t.name AS primary_type_name, t2.name AS secondary_type_name, s.*, e.*, e1.name AS evol_1_name, e2.name AS evol_2_name, e3.name AS evol_3_name
        FROM pokemons p
        LEFT JOIN type t ON p.type_primary = t.id
        LEFT JOIN type t2 ON p.type_secondary = t2.id
        LEFT JOIN evolutions e ON p.evolutions_id = e.id
        LEFT JOIN pokemons e1 ON e.evol_1 = e1.id
        LEFT JOIN pokemons e2 ON e.evol_2 = e2.id
        LEFT JOIN pokemons e3 ON e.evol_3 = e3.id
        LEFT JOIN stats s ON p.stats_id = s.id
        WHERE p.name = ?
    ");
        $stmt->execute([$pokemonName]);
        $pokemonDetails = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return $pokemonDetails;
}
