<?php


class Login
{

    use PDOConn;

    public final static function store(array $data): array | bool
    {
        $user = self::getUser($data['email']);
        if ($user && password_verify($data['password'], $user[0]['password'])) {

            return $user;
           
        } else {
            return false;
        }

    }

    private static function getUser(string $email): mixed
    {
        try {
            $user = self::getPDOInstance()->query(
                "SELECT * FROM users WHERE email = ?",
                [$email]
                
            );
         

            return $user ;
        } catch (Exception $e) {
            $e->getMessage();
            return false;
        }

    }
}