<?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require_once __DIR__.'/../queries/connectDb.php';
            $bdd = connectDb();
            
            if (isset($_POST['name']) && isset($_POST['birthday']) && isset($_POST['email']) && isset($_POST['password'])) {
                if (empty($_POST['name']) || empty($_POST['birthday']) || empty($_POST['email']) || empty($_POST['password'])) {
                    echo 'Please complete all fields';
                }
                else {
                $name = $_POST["name"];
                $birthday = $_POST["birthday"];
                $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
                if ($email === false) {
                    echo 'Veuillez fournir une adresse e-mail valide';
                } else {
                    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
                
                $sql = "INSERT INTO users (name, birthday, email, password) VALUES (:name, :birthday, :email, :password)";
                $query = $bdd->prepare($sql);
                $query->execute(array(
                    'name' => $name,
                    'birthday' => $birthday,
                    'email' => $email,
                    'password' => $password
                ));
                header('Location: /');
                $bdd = null;
                }
            }
        }
    }
    else {
        header('Location: /');
    }
    ?>