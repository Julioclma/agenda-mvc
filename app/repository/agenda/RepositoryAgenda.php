<?php

namespace agenda\app\repository\agenda;

use agenda\app\models\agenda\Agenda;
use agenda\app\models\agenda\CriarAgenda;
use agenda\app\server\database\DatabasePDO;
use PDO;

class RepositoryAgenda implements RepositoryInterface
{

    public function all(): array
    {
        $sql = "SELECT * FROM " . Agenda::$table;
        $stmt = DatabasePDO::conn()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function create(CriarAgenda $agenda): bool
    {
        $sql = "INSERT INTO " . Agenda::$table . " (name, number, createdAt) VALUES(:name, :number, :createdAt)";
        $stmt = DatabasePDO::conn()->prepare($sql);
        $stmt->bindValue(":name", $agenda->getAgenda()->getName());
        $stmt->bindValue(":number", $agenda->getAgenda()->getNumber());
        $stmt->bindValue(":createdAt", $agenda->setAndGetDateFormat('Y-m-d H:i:s'));
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
