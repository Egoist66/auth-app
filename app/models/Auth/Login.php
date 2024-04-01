<?php


class Login
{

    use PDOConn;

    final public static function store(array $data): array | bool
    {
        $user = Users::getUser($data['email']);
        if ($user && password_verify($data['password'], $user[0]['password'])) {

            return $user;
           
        }

        return false;

    }


}