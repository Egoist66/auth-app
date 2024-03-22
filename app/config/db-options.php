<?php
/* Different options of DB providers */

try {
    $db_options = [
        "pdo" => new PDO(
            "mysql:host=" . DB_HOST . ";" . "dbname=" . DB_NAME,
            DB_USERNAME,
            DB_PASSWORD,
            [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        ),
    ];

    return $db_options;
}
catch (Exception $e){
    echo 'DB Error' . ' '.  $e->getMessage();
}