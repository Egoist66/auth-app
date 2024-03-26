<?php
session_start();

require_once __DIR__ . '/functions/utils/report-error.php';



require_once __DIR__ . '/config/app-config.php';
require_once __DIR__ . '/config/db-config.php';
require_once __DIR__ . '/config/db-options.php';
require_once __DIR__ . '/functions/functions.php';
require_once __DIR__ . '/models/Database/IDatabase.php';
require_once __DIR__ . '/helpers/usePDO.php';
require_once __DIR__ . '/helpers/useDropUsers.php';
require_once __DIR__ . '/models/Database/MySQLDatabase.php';
require_once __DIR__ . '/migrations/UsersTableMigration.php';
require_once __DIR__ . '/models/Users/Users.php';
require_once __DIR__ . '/models/Auth/Login.php';
require_once __DIR__ . '/models/Auth/Register.php';
require_once __DIR__ . '/controllers/HomeController.php';
require_once __DIR__ . '/controllers/ProfileController.php';
require_once __DIR__ . '/controllers/LoginController.php';
require_once __DIR__ . '/controllers/RegisterController.php';
require_once __DIR__ . '/controllers/ErrorController.php';
require_once __DIR__ . '/controllers/Page404Controller.php';
require_once __DIR__ . '/router/route-map.php';
require_once __DIR__ . '/router/Router.php';


Router::route();

