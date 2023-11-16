<?php
// Routeur simple

// Inclut le fichier d'aide pour gérer les requêtes
require_once __DIR__.'/helpers/request.php';

// Instruction Switch pour gérer différentes routes en fonction du chemin depuis l'URL
switch($url['path'])
{
    // Case: Root path '/'
    case '/Pokedex/':
        // Vérifiez si la méthode HTTP est GET
        if($method == 'GET') {
            // Inclut le fichier 'views/index.php' pour le chemin racine
            require 'controllers/PokedexController.php';
            index();
        }
        break;

    // Case: Gérer d'autres chemins
    case '/pokemon':
        // Vérifiez si la méthode HTTP est GET
        if($method == 'GET') {
            // Analyse la chaîne de requête de l'URL et stocke le résultat dans le tableau 'result'
            parse_str($url['query'], $result);
            // Vérifiez si le paramètre 'pokemon' est défini dans la chaîne de requête
            if(isset($result['name']) && !empty($result['name'])) {
                
                // If 'pokemon' parameter is set, include the 'views/show.php' file
                require 'views/show.php';
            } else {
                // If 'pokemon' parameter is not set, include the 'views/errors/404.php' file
                require 'views/errors/404.php';
                // Set HTTP response code to 404 Not Found
                http_response_code(404);
            }
        }
        break;

    // Default case: Handle all other paths
    default:
        // Include the 'views/errors/404.php' file for unknown paths
        require 'views/errors/404.php';
        // Set HTTP response code to 404 Not Found
        http_response_code(404);
        break;
}
