<?php

class Users
{
    use DropUsersTable;
    use PDOConn;

    final public static function store(array $data): array
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

    final public static function getUser(string $email): mixed
    {
        try {
            $user = self::getPDOInstance()->query(
                "SELECT * FROM users WHERE email = ?",
                [$email]

            );


            return $user;
        } catch (Exception $e) {
            $e->getMessage();
            return false;
        }

    }

    final public static function update(): void
    {

    }

    final public static function drop(): void
    {
        self::_drop();
    }


}