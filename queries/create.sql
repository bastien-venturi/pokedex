CREATE DATABASE pokedex;

USE pokedex;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    birthday DATE,
    email VARCHAR(255),
    password VARCHAR(255)
);

CREATE TABLE fav (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    pokemon_id INT
);


CREATE TABLE type (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255)
);

CREATE TABLE pokemons (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(255), 
    description TEXT, 
    url_img VARCHAR(255),
    stats_id INT,
    type_primary INT, 
    type_secondary INT, 
    evolutions_id INT
);

CREATE TABLE evolutions (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    evol_1 INT,
    evol_2 INT,
    evol_3 INT,
    evol_4 INT,
    evol_5 INT,
    evol_6 INT,
    evol_7 INT,
    evol_8 INT,
    evol_9 INT
);

CREATE TABLE stats (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    pokemon_id INT, 
    hp INT, 
    attack INT, 
    defense INT, 
    specific_defense INT, 
    specific_attack INT, 
    speed INT
)



