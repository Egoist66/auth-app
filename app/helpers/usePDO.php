<?php

trait PDOConn {
    private static function getPDOInstance(): bool|IDatabase
    {
        global $db_options;
        return MySQLDatabase::getDBInstance($db_options['pdo']);
    }
}
