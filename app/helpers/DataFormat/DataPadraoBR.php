<?php

namespace agenda\app\helpers\DataFormat;
use DateTime;

class DataPadraoBR extends DateTime
{
    public static function date() : string
    {
        return $this->format();
    }

}
