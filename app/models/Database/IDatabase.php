<?php
interface IDatabase {
    public function exec(string $sql): void;
    public function execute(string $sql, array $prepared_params): mixed;
    public function query(string $sql, array $prepared_params): mixed;
    public function existsKeyInColumn(string $column, string $table): bool;
}