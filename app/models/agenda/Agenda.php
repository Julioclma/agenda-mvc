<?php

namespace agenda\app\models\agenda;

use DateTime;

class Agenda
{
    public static $table = "contacts";
    private $name;
    private $number;
    private $createdAt;

    public function __construct(string $name, string $number)
    {
        $this->name = $name;
        $this->number = $number;
        $this->createdAt = $this->setDate();
    }

    private function setDate(): string
    {
        return (new DateTime)->format('Y-m-d H:i:s');
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getNumber(): string
    {
        return $this->number;
    }
    public function getDate(): string
    {
        return $this->createdAt;
    }
}
