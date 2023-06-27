<?php

use agenda\app\routes\Routes;
$routes = Routes::routes();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>

    <nav>
        <ul>
            <li>
                <a href="<?= $routes['contacts']['url'] ?>">Contacts</a>
            </li>
            <li>
                <a href="<?= $routes['home']['url'] ?>">Home</a>
            </li>
        </ul>
    </nav>