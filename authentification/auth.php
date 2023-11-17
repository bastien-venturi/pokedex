<?php
require_once __DIR__ . '/../queries/connectDb.php';
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['name']) && isset($_POST['password'])){

        $name = $_POST['name'];
        $password = $_POST['password'];

        $bdd = connectDb();

        $sth = $bdd->prepare('SELECT id,name, password FROM users WHERE name = :user');
        $sth->bindValue('user', $name);
        $sth->execute();


        $result = $sth->fetch();
        if (password_verify($password, $result['password'])){
            $_SESSION['user'] = [
                'name' => $result['name'],
                'id' => $result['id']
            ];
            
            header('Location: /');
        }

    }
}

?>


