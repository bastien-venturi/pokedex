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
    <script src="https://kit.fontawesome.com/ceda9163bb.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="header-pic">
            <img src="public/img/pokemon-logo.png" alt="logoPokemon">
        </div>
        
        <nav class="navbar">
            <div class="mask">
                <ul class="navbar-list">
                    <li><a href="#"><h2>Pokemon</h2></a></li>
                    <li><a href="#"><h2>My account</h2></a></li>
                    <li><a href="#"><h2>Register</h2></a></li>
                </ul>
            </div>
        </nav>
<!-- 
        <div class="navbar-search">
            <form action="" autocomplete="on">
                <input class="input-search" name="search" type="text" placeholder="Search ..">
                <input class="input-search-submit" id="search_submit" value="Rechercher" type="submit">
            </form>
        </div> -->
        <div class="navbar-search">
            <form action="" autocomplete="on">
                <input class="input-search" name="search" type="text" placeholder="Search ..">
                <button class="btn-search" id="search_submit" value="Rechercher" type="submit"><i class="fa fa-search"></i></button>          
            </form>
        </div>

    </header>
