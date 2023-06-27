<?php

namespace agenda\app\server\database;

class Database
{
    private $host;
    private $dbName;
    private $dbUser;
    private $dbPass;

    public function __construct(array $config)
    {
        $this->host = $config['host'];
        $this->dbName = $config['dbName'];
        $this->dbUser = $config['dbUser'];
        $this->dbPass = $config['dbPass'];
    }

    public function host(): string
    {
        return $this->host;
    }
    public function dbName(): string
    {
        return $this->dbName;
    }

    public function dbUser(): string
    {
        return $this->dbUser;
    }

    public function dbPass(): string
    {
        return $this->dbPass;
    }
}
