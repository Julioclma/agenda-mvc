<?php

namespace agenda\app\models\agenda;

use DateTime;

class Agenda
{
    private $name;
    private $description;
    private $date;
    public static $table = "tarefas";

    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
        $this->date = (new DateTime)->format('Y-m-d H:i:s');
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
    public function getDate(): string
    {
        return $this->date;
    }
}
