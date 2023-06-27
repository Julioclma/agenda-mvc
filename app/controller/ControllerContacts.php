<?php

namespace agenda\app\controller;

use agenda\app\helpers\Request;
use agenda\app\models\agenda\Agenda;
use agenda\app\repository\agenda\RepositoryAgenda;

class ControllerContacts extends ControllerImplements
{

    private $repository;

    protected $viewPath = __DIR__ . '../../view/contacts/contacts.php';


    public function __construct()
    {
        $this->repository = new RepositoryAgenda;
    }

    public function create(Request $request): void
    {
        var_dump('criando contato...');
        var_dump($request);
        exit();
        $check = $this->repository->create(new Agenda($_POST['name'], $_POST['description']));

        if (!$check) {
            echo 'erro ao criar tarefa';
        }
        echo 'criado com sucesso!';
    }
}
