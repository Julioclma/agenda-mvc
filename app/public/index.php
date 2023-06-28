<?php

include_once '../../vendor/autoload.php';

use agenda\app\helpers\DataFormat\DataPadraoBR;
use agenda\app\models\agenda\Agenda;
use agenda\app\models\agenda\CriarAgenda;
use agenda\app\routes\ControllerRoutes;

(new ControllerRoutes)->process();

