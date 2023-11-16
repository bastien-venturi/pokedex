<?php 
require_once __DIR__.'/partials/header.php';
?>

<main>

    <h1> Subscribe </h1>

    <form action="" method="post">
        <input type="text" name=firstname placeholder=Firstname>              
        <input type="text" name=lastname placeholder=Lastname>
        <input type='email' name=email placeholder=Email>
        <input type="password" name=password placeholder=Password>
        <input type="submit" name=submit value="Submit">
    </form>
    <a href="/">Homepage</a>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password'])) {
                if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['password'])) {
                    echo 'Veuillez remplir tous les champs';
                }
                else {
                $firstname = $_POST["firstname"];
                $lastname = $_POST["lastname"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                // $password = password_hash($password, PASSWORD_DEFAULT);
                $query = $bdd->prepare('INSERT INTO users(firstname, lastname, email, password) VALUES(:firstname, :lastname, :email, :password)');
                $query->execute(array(
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'email' => $email,
                    'password' => $password
                ));
                header('Location: index.php');

            }
        }
    }
    ?>

</main>



<?php 
require_once __DIR__.'/partials/footer.php';
?>
