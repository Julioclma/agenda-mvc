<?php include_once __DIR__ . '/../template/header.php' ?>

<header>Contacts</header>

<main>
    <form action="<?= $routes['contacts-create']['url'] ?>" method="<?= $routes['contacts-create']['request'] ?>">
        <input type="text" name="name" placeholder="Nome da tarefa">
        <input type="text" name="description" placeholder="Descrição">
        <button type="submit">registrar</button>
    </form>

<?php include_once __DIR__ . '/../template/footer.php' ?>