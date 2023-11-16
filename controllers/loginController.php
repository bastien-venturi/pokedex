<?php


function index()
{
    require_once __DIR__ . '/../views/login.view.php';

}

function logOn(){
    
        header("Location: /index.php");
}
