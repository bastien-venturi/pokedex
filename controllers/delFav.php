<?php

require '../queries/connectDb.php';
session_start();
if(isset($_SESSION['user']) && $_SERVER["REQUEST_METHOD"] == "POST"){

    $userId = $_SESSION['user']['id'];
    $pokemonId = intval($_POST['pokeId']);

    var_dump($userId);
    var_dump($pokemonId);

    try {
        $bdd = connectDb();
        $sql = 'DELETE FROM fav   WHERE user_id = :userId AND pokemon_id = :pokemonId';

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
?>
