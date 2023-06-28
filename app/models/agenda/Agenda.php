<?php

namespace agenda\app\models\agenda;

use DateTime;

class Agenda
{
    public static $table = "contacts";
    private $name;
    private $number;

    public function __construct(string $name, string $number)
    {
        $this->name = $name;
        $this->number = $number;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getNumber(): string
    {
        return $this->number;
    }
}
