<?php

class Users
{

    public static function create(): void {
        UsersTableMigration::migrate();
    }
}