<?php 
    require_once __DIR__.'/partials/header.php';
?>

<main>

    <h1> Subscribe </h1>

    <form action="/controllers/UserController.php" method="post">
        <input type="text" name=name placeholder=Name>              
        <input type="date" name=birthday placeholder=Birthday>
        <input type='email' name=email placeholder=Email>
        <input type="password" name=password placeholder=Password>
        <input type="submit" name=submit value="Submit">
    </form>
    <a href="/">Homepage</a>

    <?php
    
    // Connexion à la base de données (à ajuster en fonction de vos paramètres)



        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $dsn = 'mysql:host=localhost;dbname=nom_de_la_base_de_donnees';
            $username = 'votre_nom_utilisateur';
            $password = 'votre_mot_de_passe';
    
            try {
                $bdd = new PDO($dsn, $username, $password);
            } catch (PDOException $e) {
                die('Erreur : ' . $e->getMessage());
            }
            
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
                    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
                
                $sql = "INSERT INTO nom_de_la_table (name, birthday, email, password) VALUES (:name, :birthday, :email, :password)";
                $query = $bdd->prepare($sql);
                $query->execute(user(
                    'name' => $name,
                    'birthday' => $birthday,
                    'email' => $email,
                    'password' => $password
                ));
                header('Location: /index.php');
                $bdd = null;
                }
            }
        }
    }
    ?>

</main>



<?php 
require_once __DIR__.'/partials/footer.php';
?>
