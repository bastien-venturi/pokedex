<?php
require_once __DIR__ . '/partials/header.php';
?>

<main>

    <h2 class="view_title"> Register </h2>

    <form class="register_form" action="../controllers/UserCreateController.php" method="post">
        <input type="text" name=name placeholder=Name>
        <input type="date" name=birthday placeholder=Birthday>
        <input type='email' name=email placeholder=Email>
        <input type="password" name=password placeholder=Password>
        <input type="password" name=password2 placeholder=Confirm Password>
        <input type="submit" name=submit value="Submit">
    </form>
    <p class="login_link">Already have an account ?<a href="/index.php/login"> Log-in</a></p>



</main>



<?php
require_once __DIR__ . '/partials/footer.php';
?>