<?php

namespace agenda\app\controller;

class ControllerImplements
{
    protected $viewPath = "";

    public function index(?string $title = 'sem titulo'): void
    {
        var_dump($title);
        include $this->viewPath;
    }
}
