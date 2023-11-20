<?php
require_once __DIR__ . '/../queries/connectDb.php';
if (isset($_SESSION['user'])){
    $bdd = connectDb();
    $userId = $_SESSION['user']['id'];
    $connect = false;

    try {
        $sth = $bdd->prepare('SELECT id FROM users WHERE id = :user');
        $sth->bindValue('user', $userId);
        $sth->execute();

        session_unset();
        session_destroy();

        header('Location: /');

    }catch (PDOException $e){
        return $e;
    }
} else {
    require_once __DIR__ .'/../views/errors/notConnected.php';
}