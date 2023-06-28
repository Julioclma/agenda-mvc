<?php

use agenda\app\routes\Routes;

include_once __DIR__ . '/../template/header.php' ?>

<header>Contacts</header>

<main>
    <form action="<?= Routes::routes()['contacts-create']['url'] ?>" method="<?= Routes::routes()['contacts-create']['request'] ?>">
        <input type="text" name="name" placeholder="Nome da tarefa">
        <input type="text" name="number" placeholder="Descrição">
        <button type="submit">registrar</button>
    </form>
</main>

<hr>
<table>
    <thead>
        <tr>
            <th>#ID</th>
            <th>Name</th>
            <th>Number</th>
            <th>CreatedAT</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($params['contacts'] as $contact) : ?>
            <tr>
                <td><?= $contact['id'] ?></td>
                <td><?= $contact['name'] ?></td>
                <td><?= $contact['number'] ?></td>
                <td><?= $contact['createdAt'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php include_once __DIR__ . '/../template/footer.php' ?>