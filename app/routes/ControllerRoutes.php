<?php

namespace agenda\app\routes;

use agenda\app\exceptions\RouteNotFound;
use agenda\app\helpers\Request;
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


    public function process(): void
    {
        foreach ($this->routes as $route) {
            $url = $route['url'];
            $typeRequest = $route['request'];
            $action = $route['action'];
            isset($route['title']) ? $title = $route['title'] : $title = '';

            if ($this->checkRequest($url, $typeRequest)) {

                if ($this->isIndex($action)) {
                    (new $route['controller'])->$action($title);
                    return;
                }
                (new $route['controller'])->$action(new Request($_POST));
                return;
            }
        }
        $this->routeNotFound();
    }
    private function isIndex(string $action): bool
    {
        return  $action === 'index' ? true : false;
    }

    private function checkRequest(string $url, string $typeRequest): bool
    {
        return $this->uri === $url && $this->request === $typeRequest ? true : false;
    }

    private function routeNotFound(): void
    {
        throw new RouteNotFound("Rota não encontrada");
    }
}
