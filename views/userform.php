<?php 
    require_once __DIR__.'/partials/header.php';
?>

<main>

    <h1> Subscribe </h1>

    <form action="../controllers/UserCreateController.php" method="post">
        <input type="text" name=name placeholder=Name>              
        <input type="date" name=birthday placeholder=Birthday>
        <input type='email' name=email placeholder=Email>
        <input type="password" name=password placeholder=Password>
        <input type="submit" name=submit value="Submit">
    </form>
    <a href="/">Homepage</a>



</main>



<?php 
require_once __DIR__.'/partials/footer.php';
?>
