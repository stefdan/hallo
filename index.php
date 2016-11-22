<?php
require_once 'inc/datenbank.inc.php';
require_once 'inc/funktionen.inc.php';
require_once 'src/Entities/person.php';

$action = isset($_GET['action']) ? $_GET['action'] : null;
$template = $action;

switch ($action) {
    case 'zeige_person':
        $person = holeperson($db, 1);
        break;
    default:
        $personen = holepersonen($db);
        $template = 'zeige_personen';
}
require_once 'templates/' . $template . '.tpl.php';

// require_once 'templates/zeige_person.tpl.php';
// require_once 'templates/zeige_personen.tpl.php';

?>
<a href="index.php?action=zeige_person">Zeige person</a>
<a href="index.php">Zeige Bücher</a>
