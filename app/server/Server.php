<?php

namespace agenda\app\server;

class Server
{
    public static function uri() : string
    {
        return $_SERVER['REQUEST_URI'];
    }


    public static function request() : string
    {
        return $_SERVER['REQUEST_METHOD'];
    }

}
