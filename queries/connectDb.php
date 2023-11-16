<?php



function connectDb() {

    require '../helpers/connect_var_db.php';

    try{
        $conn = new PDO("mysql:host=$serverName;dbname=pokedex", $userName, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
    catch(PDOException $e){
        echo "Error : " . $e->getMessage();
    }
}
