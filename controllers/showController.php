<?php

require './queries/connectDb.php';

function fetchDetails()
{
    $pdo = connectDb();
    $pokemonName = htmlspecialchars($_GET['name']);

    try {
        $stmt = $pdo->prepare("SELECT * FROM pokemons WHERE name = ?");
        $stmt->execute([$pokemonName]);
        $pokemonDetails = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {

        echo "Error: " . $e->getMessage();
    }
}
