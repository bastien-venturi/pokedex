<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once __DIR__.'/../queries/connectDb.php';
        $bdd = connectDb();
        
        if (isset($_POST['name']) && isset($_POST['birthday']) && isset($_POST['email']) && isset($_POST['password'])) {

            if (empty($name)) {
                $nameErr =  'Name is required';
                //utiliser la fonction preg_match() avec une expression régulière pour vérifier que le nom ne contient que des lettres et des espaces.
                //Si la validation échoue, afficher un message d'erreur
            } elseif (!preg_match('/^[a-zA-Z ]+$/', $name)) {
                $nameErr =  'Only letters and white space allowed';
            }
        
            
            $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
            if ($email === false) {
                echo 'Please provide a valid e-mail address';

            }

            }
             else {
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
    

else {
    header('Location: /');
}
?>