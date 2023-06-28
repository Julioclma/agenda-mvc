<?php
use agenda\app\routes\Routes;
use agenda\app\server\Server;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= Server::css() ?>" />
    <title><?= $title ?></title>
</head>

<body>

    <nav>
        <ul>
            <li>
                <a href="<?= Routes::routes()['contacts']['url'] ?>">Contacts</a>
            </li>
            <li>
                <a href="<?= Routes::routes()['home']['url'] ?>">Home</a>
            </li>
        </ul>
    </nav>