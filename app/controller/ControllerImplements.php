<?php

namespace agenda\app\controller;

use agenda\app\helpers\Request;

class ControllerImplements
{
    protected $viewPath = "";

    public function index(?string $title = 'sem titulo'): void
    {
        var_dump($title);
        include $this->viewPath;
    }

    protected function checkParams(Request $object, array $properts): bool
    {
        foreach ($properts as $property) {
            if (!property_exists($object, $property)) {
                return false;
            }
        }

        return true;
    }
}
