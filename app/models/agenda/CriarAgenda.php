<?php

namespace agenda\app\models\agenda;

use DateTimeInterface;

class CriarAgenda
{
    private Agenda $agenda;

    private DateTimeInterface $data;

    public function __construct(Agenda $agenda, DateTimeInterface $dateTime)
    {
        $this->agenda = $agenda;
        $this->data = $dateTime;
    }

    public function getAgenda(): Agenda
    {
        return $this->agenda;
    }
    public function setAndGetDateFormat(string $format): string
    {
        return $this->data->format($format);
    }
}
