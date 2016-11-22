<?php

//require_once 'datenbank.inc.php';
//require_once '../src/Entities/Person.php';
//var_dump(holePersonen($db));
//var_dump(holePerson($db, 1));

function holePersonen($db) {

    $stmt = $db->query('SELECT * FROM personensammlung.personen');

    $personenArr = $stmt->fetchAll();

    $personenObj = [];
    foreach($personenArr as $b) {
        $personenObj[] = new Person($b);
    }
    return $personenObj;
}


function holePerson($db, $id) {

    $stmt = $db->query('SELECT * FROM personensammlung.personen WHERE id=' . $id);

    $personArr = $stmt->fetch();

    if($personArr !== false) {
        return new Person($personArr);
    }
}
