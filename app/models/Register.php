<?php

trait PDOConn {
    private static function getPDOInstance(): bool|IDatabase
    {
        global $db_options;
        return Database::getDBInstance($db_options['pdo']);
    }
}

class Register
{
   use PDOConn;

   public static function store(): void {
       self::getPDOInstance()->execute('', ['']);
   }

}