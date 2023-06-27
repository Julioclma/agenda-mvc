<?php

namespace agenda\app\repository\agenda;

use agenda\app\models\agenda\Agenda;

interface RepositoryInterface
{
    public function create(Agenda $agenda) : bool;

    public function delete(string $id) : bool;
  
}
