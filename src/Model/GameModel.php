<?php

namespace App\Model;

class GameModel
{
    private \PDO $connection;

    public function __construct()
    {
        $this->connection = new \PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);
    }

    public function getAll(): ?array
    {
        $statement = $this->connection->query('SELECT * FROM game');
        $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $result === false ? null : $result;
    }

    public function getById(int $id): ?array
    {
        $statement = $this->connection->prepare('SELECT * FROM game WHERE id = :id');
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
        $result = $statement->fetch(\PDO::FETCH_ASSOC);
        return $result === false ? null : $result;
    }
}
