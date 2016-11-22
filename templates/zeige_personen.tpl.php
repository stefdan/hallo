<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Personen</title>
</head>

<body>
<?php foreach ($personen as $person): ?>
    <?php require 'person.tpl.php'; ?>
<?php endforeach; ?>
</body>
</html>