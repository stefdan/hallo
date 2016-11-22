<?php
require_once 'inc/datenbank.inc.php';
require_once 'inc/funktionen.inc.php';
require_once 'src/Entities/Person.php';

$personen = holePersonen($db);

require_once 'templates/zeige_personen.tpl.php';

