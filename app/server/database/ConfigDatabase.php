<?php

namespace agenda\app\server\database;

class ConfigDatabase
{

    private $host = "localhost";
    private $dbName = "agenda";
    private $dbUser = "root";
    private $dbPass = "";
    private $config;

    public function __construct()
    {
        $this->config = [
            "host" => $this->host,
            "dbName" => $this->dbName,
            "dbUser" => $this->dbUser,
            "dbPass" => $this->dbPass
        ];
    }

    public function config(): Database
    {
        return (new Database($this->config));
    }
}
