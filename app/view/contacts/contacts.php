<?php include_once __DIR__ . '/../template/header.php' ?>

<header>Contacts</header>

<main>
    <form action="<?= $routes['contacts-create']['url'] ?>" method="<?= $routes['contacts-create']['request'] ?>">
        <input type="text" name="name" placeholder="Nome da tarefa">
        <input type="text" name="number" placeholder="Descrição">
        <button type="submit">registrar</button>
    </form>
</main>

<hr>

<?php foreach ($params as $contacts) : ?>

    <?php foreach ($contacts as $key => $contact) : ?>
        <li><label>ID: </label><?= $contact['id'] ?></li>
        <li><label>Name: </label><?= $contact['name'] ?></li>
        <li><label>Number: </label><?= $contact['number'] ?></li>
        <li><label>CreatedAT: </label><?= $contact['createdAt'] ?></li>
        </ul>
    <?php endforeach ?>
<?php endforeach ?>


<?php include_once __DIR__ . '/../template/footer.php' ?>