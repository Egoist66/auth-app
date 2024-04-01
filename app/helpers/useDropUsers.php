<?php

trait DropUsersTable {
    public static function _drop(): void
    {
        UsersTableMigration::drop();
    }
}