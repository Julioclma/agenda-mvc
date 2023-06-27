<?php

$title = "Contacts";
include_once __DIR__.'/../template/header.php' ?>

Contacts

<form action="/contacts/create" method="post">
<input type="text" name="name" placeholder="Nome da tarefa">
<input type="text" name="description" placeholder="Descrição">
<button type="submit">registrar</button>
</form>

<?php include_once __DIR__.'/../template/footer.php' ?>