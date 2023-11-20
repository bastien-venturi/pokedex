<?php

require '../queries/connectDb.php';
session_start();
if(isset($_SESSION['user']) && $_SERVER["REQUEST_METHOD"] == "POST"){

    $userId = $_SESSION['user']['id'];
    $pokemonId = $_POST['pokeId'];

    try {
        $bdd = connectDb();
        $sql = 'INSERT INTO fav (user_id, pokemon_id) VALUES (:userid, :pokemonid)';

        $query = $bdd->prepare($sql);
        $query->execute(array(
            ':userid'=>$userId,
            ':pokemonid'=>$pokemonId
        ));
        header('Location: /');
        $bdd=null;
    }catch (PDOException $e){
        echo "ERROR : $e";
    }
}