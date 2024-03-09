<?php



class Database
{
    public $connection;
    public function __construct(array $config = [])
    {

        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']}";

        try {
            $this->connection = new PDO($dsn, $config['user'], $config['password'],[
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
//    echo "Conexión exitosa!";
        } catch (PDOException $e) {
            die("No se pudo conectar con el servidor: " . $e->getMessage());
        }
    }

    public function consult(string $query, array $params = [])
    {

        $statement = $this->connection->prepare($query);
        $statement->execute($params);

        return $statement;
    }

}

