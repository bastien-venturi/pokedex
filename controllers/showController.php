<?php

require './queries/connectDb.php';

function fetchDetails()
{
    $pdo = connectDb();
    $pokemonName = htmlspecialchars($_GET['name']);

    try {
        $stmt = $pdo->prepare("
        SELECT p.*, t.name AS primary_type_name, t2.name AS secondary_type_name, s.*,
        e1.name AS evol_1_name, e2.name AS evol_2_name, e3.name AS evol_3_name,
        e4.name AS evol_4_name, e5.name AS evol_5_name, e6.name AS evol_6_name,
        e7.name AS evol_7_name, e8.name AS evol_8_name, e9.name AS evol_9_name
        FROM pokemons p
        LEFT JOIN type t ON p.type_primary = t.id
        LEFT JOIN type t2 ON p.type_secondary = t2.id
        LEFT JOIN stats s ON p.stats_id = s.id
        LEFT JOIN evolutions e ON p.id = e.id
        LEFT JOIN pokemons e1 ON e.evol_1 = e1.id
        LEFT JOIN pokemons e2 ON e.evol_2 = e2.id
        LEFT JOIN pokemons e3 ON e.evol_3 = e3.id
        LEFT JOIN pokemons e4 ON e.evol_4 = e4.id
        LEFT JOIN pokemons e5 ON e.evol_5 = e5.id
        LEFT JOIN pokemons e6 ON e.evol_6 = e6.id
        LEFT JOIN pokemons e7 ON e.evol_7 = e7.id
        LEFT JOIN pokemons e8 ON e.evol_8 = e8.id
        LEFT JOIN pokemons e9 ON e.evol_9 = e9.id
        WHERE p.name = ?
    ");
        $stmt->execute([$pokemonName]);
        $pokemonDetails = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    return $pokemonDetails;
}
