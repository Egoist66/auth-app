<?php

class Users
{

    public static function create(): void {
        UsersTableMigration::migrate();
    }

    public static function delete(): void {
        UsersTableMigration::drop();
        
    }
}