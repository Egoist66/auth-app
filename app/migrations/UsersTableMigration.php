<?php


class UsersTableMigration
{
    public final static function migrate(): void
    {
        global $db_options;
        $users_query = "
            CREATE TABLE IF NOT EXISTS users (
                id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                nickname VARCHAR(256),
                email VARCHAR(256),
                password VARCHAR(256)
            ) ENGINE=INNODB;
        ";
        Database::getDBInstance($db_options['pdo'])->exec($users_query);

        
    }

    public final static function drop(): void {
        global $db_options;

        Database::getDBInstance($db_options['pdo'])->exec('DROP TABLE users');

    }
}