<?php

namespace agenda\app\repository\agenda;

use agenda\app\models\agenda\Agenda;
use agenda\app\server\database\DatabasePDO;

class RepositoryAgenda implements RepositoryInterface
{
    public function create(Agenda $agenda): bool
    {
        $sql = "INSERT INTO " . Agenda::$table . " VALUES(:name, :description, :date)";
        $stmt = DatabasePDO::conn()->prepare($sql);
        $stmt->bindParam(":name", $agenda->getName());
        $stmt->bindParam(":description", $agenda->getDescription());
        $stmt->bindParam(":date", $agenda->getDate());
        return $stmt->execute();
    }

    public function delete(string $id): bool
    {
        $sql = "DELETE FROM " . Agenda::$table . "  WHERE id = :id";
        $stmt = DatabasePDO::conn()->prepare($sql);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }
}
