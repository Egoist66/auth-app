<?php

class Database implements IDatabase
{

    private static Database|null $instance = null;
    private mixed $conn;

    private function __construct(mixed $db)
    {
        $this->conn = $db;


    }

    public static function getDBInstance(mixed $connection): IDatabase|bool
    {
        try {
            if (!isset(self::$instance)) {
                self::$instance = new self($connection);

            }

            return self::$instance;
        } catch (Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }


    private function getConn(): mixed
    {

        return $this->conn;
    }


    public final function execute(string $sql, array $prepared_params): bool|PDOStatement
    {
        try {

            return $this->getConn()->prepare($sql)->execute($prepared_params);
        } catch (Exception $e) {
            return false;
        }
    }

    public final function query(string $sql, ?string $mode = null): mixed
    {
        try {
            $stm = $this->getConn()->query($sql);
            return $mode === 'single' ? $stm->fetch() : $stm->fetchAll();
        } catch (Exception $e) {
            return [];
        }

    }


    /**
     * @param string $sql
     * @return mixed
     */
    public final function exec(string $sql): void
    {
        try {
            $this->getConn()->exec($sql);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}



