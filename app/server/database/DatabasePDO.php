<?php

namespace agenda\app\server\database;

use PDO;
use PDOException;

class DatabasePDO
{

    public static function conn(): PDO
    {
        $dataBase = (new ConfigDatabase)->config();
        try {
            $conn = new PDO("mysql:host={$dataBase->host()};dbname={$dataBase->dbName()}", $dataBase->dbUser(), $dataBase->dbPass());
            if ($conn) {
                return $conn;
            }
        } catch (PDOException $e) {
            var_dump($e);
        }

    }
}
