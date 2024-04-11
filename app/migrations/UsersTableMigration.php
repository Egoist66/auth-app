<?php


class UsersTableMigration
{
    use PDOConn;

    public final static function up(): void
    {

        $users_query = "
            CREATE TABLE IF NOT EXISTS users (
                id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                nickname VARCHAR(256),
                email VARCHAR(256),
                password VARCHAR(256)
            ) ENGINE=INNODB;
        ";
        self::getPDOInstance()->exec($users_query);


    }

    public final static function drop(): void
    {

        self::getPDOInstance()->exec('DROP TABLE IF EXISTS users');

    }
}

UsersTableMigration::up();