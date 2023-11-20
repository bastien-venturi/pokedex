<?php
// Routeur simple

// Include the helper file for handling requests
require_once __DIR__ . '/helpers/request.php';
session_start();


// Switch statement to handle different routes based on the path from the URL
switch ($url['path']) {
    // Case: Root path '/'
    case '/':
        // Check if the HTTP method is GET
        if ($method == 'GET') {
            // Include the 'views/index.php' file for the root path
            require 'controllers/PokedexController.php';
            index();
        }
        break;

    // Case: Handle other paths
    case '/index.php/pokemon':
        // Check if the HTTP method is GET
        if ($method == 'GET') {
            // Parse the query string of the URL and store the result in the 'result' array
            parse_str($url['query'], $result);
            // Check if the 'pokemon' parameter is set in the query string
            if (isset($result['name']) && !empty($result['name'])) {

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

    case '/index.php/login':
        // Check if the HTTP method is GET
        if ($method == 'GET') {
            // Include the 'views/index.php' file for the root path
            require 'controllers/loginController.php';
            index();

        } else {
            // If 'pokemon' parameter is not set, include the 'views/errors/404.php' file
            require 'views/errors/404.php';
            // Set HTTP response code to 404 Not Found
            http_response_code(404);
        }
        break;

    case '/index.php/User':
        // Check if the HTTP method is GET
        if ($method == 'GET') {
            // Include the 'controllers/UserController.php' file for the root path
            require 'controllers/UserController.php';
            index();
        }
        break;
    case '/index.php/account':
        // Check if the HTTP method is GET
        if ($method == 'GET') {
            // Include the 'controllers/UserController.php' file for the root path
            require 'controllers/FavController.php';
        }
        break;

    // Default case: Handle all other paths
        
        case '/index.php/login':
            // Check if the HTTP method is GET
            if ($method == 'GET') {
                // Include the 'controllers/UserController.php' file for the root path
                require 'controllers/loginController.php';
                index();
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
