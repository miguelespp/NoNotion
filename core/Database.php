<?php


namespace core;

use PDO, PDOException;

class Database
{
    public PDO $connection;
    private $statement;

    public function __construct(array $config = [])
    {

        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']}";

        try {
            $this->connection = new PDO($dsn, $config['user'], $config['password'], [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
//    echo "Conexión exitosa!";
        } catch (PDOException $e) {
            die("No se pudo conectar con el servidor: " . $e->getMessage());
        }
    }

    public function consult(string $query, array $params = []): mixed
    {

        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        return $this;
    }

    public function findAll()
    {
        return $this->statement->fetchAll();
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->statement->fetch();
        if (!$result) {
            abort(Response::HTTP_FORBIDDEN);
        }
        return $result;
    }

}

