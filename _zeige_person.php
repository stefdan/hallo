<?php
require_once 'inc/datenbank.inc.php';
require_once 'inc/funktionen.inc.php';
require_once 'src/Entities/Person.php';

$person = holePerson($db, 2);

require_once 'templates/zeige_person.tpl.php';

