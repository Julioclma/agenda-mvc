<?php

namespace agenda\app\controller;

use agenda\app\models\agenda\Agenda;
use agenda\app\repository\agenda\RepositoryAgenda;
use agenda\app\server\database\DatabasePDO;

class ControllerContacts
{

    private $repository;

    public function __construct()
    {
        $this->repository = new RepositoryAgenda;
    }

    public function index()
    {
        include __DIR__ . '../../view/contacts/contacts.php';
    }

    public function create(): void
        {
            var_dump(DatabasePDO::conn());
            exit();
            echo 'criando contato...';
            $check = $this->repository->create(new Agenda($_POST['name'], $_POST['description']));

            if (!$check) {
            echo 'erro ao criar tarefa';
        }
        echo 'criado com sucesso!';
    }
}
