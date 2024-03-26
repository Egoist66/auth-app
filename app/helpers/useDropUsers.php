<?php

trait DropUsersTable {
    public static function drop(): void
    {
        UsersTableMigration::drop();
    }
}