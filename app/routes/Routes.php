<?php

namespace agenda\app\routes;

use agenda\app\controller\ControllerContacts;
use agenda\app\controller\ControllerHome;

class Routes
{

    public static function routes(): array
    {
        return [
            "home" => [
                "title" => "Home",
                "url" => "/home",
                "request" => "GET",
                "action" => "index",
                "controller" => ControllerHome::class
            ],
            "contacts" => [
                "title" => "Contacts",
                "url" => "/contacts",
                "request" => "GET",
                "action" => "index",
                "controller" => ControllerContacts::class
            ],
            "contacts-create" => [
                "url" => "/contacts/create",
                "request" => "POST",
                "action" => "create",
                "controller" => ControllerContacts::class
            ]
        ];
    }
}
