<?php

class Db
{
    private $connection;
    private $stmt;
    private static $instance = null;
    private function __construct() {

    }
    public static function getInstance()
    {
        if(self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnect(array $db_config)
    {
        $dsn = "mysql:host={$db_config['host']};dbname={$db_config['name']};charset={$db_config['charset']}";
        try {
            $this->connection = new PDO($dsn, $db_config['name'], $db_config['password'], $db_config['options']);
            return $this;
        } catch (PDOException $e) {
            echo "{$e->getMessage()}";
        }

    }
    public function query($query, $params = [])
    {
        $this->stmt = $this->connection->prepare($query);
        $this->stmt->execute($params);
        return $this;
    }
    public function findAll()
    {
        return $this->stmt->fetchAll();
    }
    public function find()
    {
        return $this->stmt->fetch();
    }
    public function findOrReturn()
    {
        $res = $this->stmt->fetch();
        if(!$res) {
            abort();
        }
        return $res;
    }
}