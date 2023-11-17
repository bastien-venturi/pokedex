<?php

function index()
{
    $user = [
        'name' => 'John Doe',
        'email' => 'johndoe@email.com',
    ];

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=pokedex', 'root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die('Erreur CONNECT :' . $e->getMessage());
    }

    try {
        $query = $pdo->query('SELECT * from pokemons');
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        die('Erreur PDO : ' . $e->getMessage());
    }

    require_once __DIR__ . '/../views/index.php';

    return $user;
}
