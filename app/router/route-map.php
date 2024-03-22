<?php

/** @var Router $routeMap */
$routeMap = [
    "index" => [
        'home' => HomeController::index(),
        'login' => LoginController::index(),
        'register' => RegisterController::index(),
        'page404' => Page404Controller::index()
    ],
    "action" => [
        "register" => RegisterController::class,
        "login" => LoginController::class
    ]


];

return $routeMap;