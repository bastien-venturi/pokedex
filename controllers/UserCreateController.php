<!-- <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once __DIR__.'/../queries/connectDb.php';
        $bdd = connectDb();
        

    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password2'])) {

        //vérifier récupérer les données du form 
        $username = $_POST['name'];
        $password = $_POST['password'];
        $confirmpassword =  $_POST['password2'];
        $passwordlen = strlen($password);
        $min = 7;
        //validation des champs du form
        $usernameErr = empty($username) ? "* Email is required" : (!filter_var($_POST['username'], FILTER_VALIDATE_EMAIL) ? "Invalid email" : "");
        $passwordErr =  empty($password) ? " Password is required" : ($passwordlen < $min ? "Password should have min 7 characters" : "");
        $passwordConfirmErr = empty($confirmpassword) ? " Password is required" : ($password != $confirmpassword ? "*password doesn't match" : "");

        //si erreurs de validation, retounrer un tableau d'erreurs 
        return array(
            "username" => $usernameErr,
            "password" => $passwordErr,
            "password2" => $passwordConfirmErr

        );
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
?> -->