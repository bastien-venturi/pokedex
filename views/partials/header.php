<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> - Pokedex</title>
    <link href="/public/css/styles.css" type="text/css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,300;0,600;0,900;1,100;1,300;1,600;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ceda9163bb.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>

        <div class="header-logo">
            <img src="/public/img/pokemon-logo.png" alt="logoPokemon">
        </div>

        <nav class="navbar">
            <ul class="navbar-list">
                <li><a href="#" class="btn-color-blue">Pokemon</a></li>
                <li><a href="#" class="btn-color-yellow">My account</a></li>
                <li><a href="#" class="btn-color-red">Register</a></li>
            </ul>
        </nav>

        <div class="navbar-search">
            <h2>Find your Pokemon</h2>
            <div class="form-container">
                <form action="" autocomplete="on">
                    <input class="input-search" name="search" type="text" placeholder="Search ..">
                    <button class="btn-search" id="search_submit" value="Rechercher" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>

    </header>