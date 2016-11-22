<?php

require_once 'inc/datenbank.inc.php';

$db->query('DROP DATABASE IF EXISTS personensammlung');
$db->query('CREATE DATABASE personensammlung');
$db->query('USE personensammlung');

$db->query('CREATE TABLE personen (
               id INT PRIMARY KEY AUTO_INCREMENT,
               name VARCHAR(255),
               email VARCHAR(255)
               );
          ');

$db->query('INSERT INTO personen (name, email)
            VALUES
            ("Cord Mählmann", "cord.maehlmann@posteo.de"),
            ("Peter Wellert", "paul.wellert@online.de")
          ');

// Zum Testen:
$stmt = $db->query('SELECT * FROM personen');
var_dump($stmt->fetchAll());


