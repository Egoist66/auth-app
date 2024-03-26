<?php

class Users
{
    use DropUsersTable;
    use PDOConn;

    public final static function store(array $data): array
    {

        $pdo = self::getPDOInstance();
        $response = [];

        if (
            $pdo->execute(
                "INSERT INTO users (nickname, email, password) VALUES (?, ?, ?)",
                [$data['name'], $data['email'], password_hash($data['password'], PASSWORD_DEFAULT)]
            )
        ) {
            $response['created'] = true;

            return $response;
        } else {
            $response['created'] = false;
            return $response;
        }



    }

    public final static function update(): void
    {
        
    }

    public final static function drop(): void
    {
        UsersTableMigration::drop();
    }


}