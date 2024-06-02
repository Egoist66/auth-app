<?php

class MySQLDatabase implements IDatabase
{

    private static MySQLDatabase|null $instance = null;
    private mixed $conn;

    private function __construct(PDO $db)
    {
        $this->conn = $db;


    }

    public static function getDBInstance(PDO $connection): MySQLDatabase|bool
    {
        try {
            if (!isset (self::$instance)) {
                self::$instance = new self($connection);

            }

            return self::$instance;
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }


    private function getConn(): PDO
    {

        return $this->conn;
    }


    final public function execute(string $sql, array $prepared_params): bool|PDOStatement
    {
        try {

            return $this->getConn()->prepare($sql)->execute($prepared_params);
        } catch (PDOException $e) {
            return false;
        }
    }

    final public function query(string $sql, array $prepared_params): array
    {
        try {
            $stm = $this->getConn()->prepare($sql);
            $stm->execute($prepared_params);
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        
        } catch (PDOException $e) {
            return [];
        }

    }
    final public function existsKeyInColumn(string $column, string $table): bool
    {
        $query = "SELECT COUNT(*) FROM $table WHERE $column = ?";
    
        try {
            $stmt = $this->getConn()->prepare($query);
            $stmt->execute([$column]);
            $count = $stmt->fetchColumn();
            
            if ($count > 0) {
               
                return true;
            } else {
               
                return false;
            }
        } catch (PDOException $e) {
            return false;
        }
    }

    /**
     * @param string $sql
     * @return mixed
     */
    final public function exec(string $sql): void
    {
        try {
            $this->getConn()->exec($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}



