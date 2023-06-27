<?php

namespace agenda\app\routes;

use agenda\app\exceptions\RouteNotFound;
use agenda\app\server\Server;

class ControllerRoutes
{
    private $uri;
    private $request;
    private $routes;

    public function __construct()
    {
        $this->uri = Server::uri();
        $this->request = Server::request();
        $this->routes = Routes::routes();
    }


    public function process()
    {
        foreach ($this->routes as $key => $route) {
            if ($this->uri === $key && $this->request === $route['request']) {
                $action = $route['action'];
                (new $route['controller'])->$action();
                return;
            }
        }
        $this->routeNotFound();
    }

    private function routeNotFound(): void
    {
        throw new RouteNotFound("Rota não encontrada");
    }
}
