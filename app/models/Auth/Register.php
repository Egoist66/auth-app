<?php


class Register
{
    use PDOConn;

    public static function store(array $data): array
    {
       return Users::store($data);
    }

}