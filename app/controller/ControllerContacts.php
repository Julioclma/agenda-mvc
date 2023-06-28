<?php

namespace agenda\app\controller;

use agenda\app\helpers\Request;
use agenda\app\models\agenda\Agenda;
use agenda\app\models\agenda\CriarAgenda;
use agenda\app\repository\agenda\RepositoryAgenda;
use DateTime;
use InvalidArgumentException;

class ControllerContacts extends ControllerImplements
{

    private $repository;

    protected $viewPath = __DIR__ . '../../view/contacts/contacts.php';

    public function __construct()
    {
        $this->repository = new RepositoryAgenda;
        $this->defineParams(['contacts'], [$this->repository->all()]);
    }


    public function create(Request $request): void
    {
        if ($this->checkParams($request, ['name', 'number'])) {

            if (!$this->repository->create(new CriarAgenda(new Agenda($request->name, $request->number), new DateTime))) {
                echo 'erro ao criar tarefa';
                return;
            }
            echo 'criado com sucesso!';
            return;
        }

        throw new InvalidArgumentException("Valores inválidos");
    }
}
