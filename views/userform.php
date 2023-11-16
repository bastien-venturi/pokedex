<?php 
$title = $_GET['name'];
require_once __DIR__.'/partials/header.php';
?>

<main>

    <h1> Formulaire </h1>

    <form action="" method="post">
        <input type="text" name=name>
        <input type="text" name=lastname>
        <input type='email' name=email>
        <input type="submit" name=submituser value="Envoyer">
    </form>

</main>

<?php 
require_once __DIR__.'/partials/footer.php';
?>
