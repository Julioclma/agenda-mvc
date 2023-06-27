<?php

namespace agenda\app\controller;

use agenda\app\helpers\Request;

class ControllerImplements
{
    protected $viewPath = "";
    protected array $params = [];

    public function index(?string $title = 'sem titulo'): void
    {
        $params = $this->getParams($this->params);

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

    protected function getParams(array $params): array
    {
        if (!empty($params)) {
            return $params;
        }
        return [];
    }
}
