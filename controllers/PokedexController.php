<?php

require './queries/connectDb.php';


function index()
{
    $user = [
        'name' => 'John Doe',
        'email' => 'johndoe@email.com',
    ];

    $pdo = connectDb();
    try {
        $query = $pdo->query('SELECT * from pokemons');
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        die('Erreur PDO : ' . $e->getMessage());
    }

    require_once __DIR__ . '/../views/index.php';

    return $user;
}
