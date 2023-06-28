<?php

namespace agenda\app\repository\agenda;

use agenda\app\models\agenda\CriarAgenda;

interface RepositoryInterface
{
    public function all(): array;
    public function create(CriarAgenda $agenda) : bool;
    public function delete(string $id) : bool;
  
}
