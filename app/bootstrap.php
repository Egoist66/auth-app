<?php
session_start();

error_reporting(E_ALL);
ini_set('error_reporting', 1);

require_once __DIR__ . '/config/app-config.php';
require_once __DIR__ . '/config/db-config.php';
require_once __DIR__ . '/config/db-options.php';
require_once __DIR__ . '/functions/utils/title.php';
require_once __DIR__ . '/functions/utils/action.php';
require_once __DIR__ . '/functions/utils/view.php';
require_once __DIR__ . '/functions/utils/validate.php';
require_once __DIR__ . '/models/IDatabase.php';
require_once __DIR__ . '/models/Database.php';
require_once __DIR__ . '/migrations/UsersTableMigration.php';
require_once __DIR__ . '/models/Users.php';
require_once __DIR__ . '/models/Login.php';
require_once __DIR__ . '/models/Register.php';
require_once __DIR__ . '/controllers/HomeController.php';
require_once __DIR__ . '/controllers/LoginController.php';
require_once __DIR__ . '/controllers/RegisterController.php';
require_once __DIR__ . '/controllers/Page404Controller.php';
require_once __DIR__ . '/router/route-map.php';
require_once __DIR__ . '/router/Router.php';

Router::route();