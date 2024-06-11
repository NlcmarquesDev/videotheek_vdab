<?php

declare(strict_types=1);

namespace SRC\Core;

use PDO;

class Database
{
    private $stmt;
    public function connection()
    {
        $dsn = 'mysql:host=' . DBconfig::$DBhost . ';dbname=' . DBconfig::$DBname . ';charset=utf8';

        return new PDO($dsn, Dbconfig::$DBuser, DBconfig::$DBpass);
    }
    public function query($query, $params = [])
    {

        $this->stmt = $this->connection()->prepare($query);
        $this->stmt->execute($params);
        return $this;
    }

    public function findAll()
    {
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function find()
    {
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
}
