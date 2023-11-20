<?php

require './queries/connectDb.php';


function index()
{
    if(isset($_SESSION['user'])){
        $name = $_SESSION['user']['name'];
    }


    $pdo = connectDb();
    try {
        $query = $pdo->query('SELECT 
        p.*, 
        t1.name AS primary_type_name, 
        t2.name AS secondary_type_name 
      FROM pokemons AS p 
      LEFT JOIN type AS t1 ON p.type_primary = t1.id 
      LEFT JOIN type AS t2 ON p.type_secondary = t2.id');
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        die('Erreur PDO : ' . $e->getMessage());
    }

    require_once __DIR__ . '/../views/index.php';

    // return $user;
}
