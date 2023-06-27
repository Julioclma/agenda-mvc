<?php

namespace agenda\app\repository\agenda;

use agenda\app\models\agenda\Agenda;
use agenda\app\server\database\DatabasePDO;

class RepositoryAgenda implements RepositoryInterface
{
    public function create(Agenda $agenda): bool
    {
        $sql = "INSERT INTO " . Agenda::$table . " (name, number, createdAt) VALUES(:name, :number, :createdAt)";
        $stmt = DatabasePDO::conn()->prepare($sql);
        $stmt->bindValue(":name", $agenda->getName());
        $stmt->bindValue(":number", $agenda->getNumber());
        $stmt->bindValue(":createdAt", $agenda->getDate());
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
