<?php

/** @var Router $routeMap */
$routeMap = [
    "index" => [
        'home' => HomeController::index(),
        'login' => LoginController::index(),
        'profile' => ProfileController::index(),
        'register' => RegisterController::index(),
        'page404' => Page404Controller::index()
    ],
    "action" => [
        "register" => RegisterController::class,
        "login" => LoginController::class
    ],
    "error" => [
        "index" => ErrorController::class
    ]


];

return $routeMap;