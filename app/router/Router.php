<?php


class Router
{

    final public static function route(): void
    {
        global $routeMap;

        $page = $_GET['page'] ?? '';
        $action = $_GET['action'] ?? '';

        switch ($page) {
            case '':
            case 'home':
                echo $routeMap['index']['home'];
                break;

            case 'register':

                if (sessionHas('auth')) {
                    redirect(route('page', 'home'));
                }
                
                if ($action) {
                    switch ($action) {
                        case 'store':
                            $routeMap['action']['register']::store();
                            break;
                    }
                }
                echo $routeMap['index']['register'];
                break;

            case 'login':
                if (sessionHas('auth')) {
                    redirect(route('page', 'home'));
                }
                if ($action) {
                    switch ($action) {
                        case 'store':
                            $routeMap['action']['login']::store();
                            break;
                    }
                }
                echo $routeMap['index']['login'];
                break;

            case 'profile':


                if ($action) {
                    switch ($action) {
                        case 'logout':
                            $routeMap['action']['login']::destroy();
                            break;
                    }
                }

                echo $routeMap['index']['profile'];
                break;

            case 'error':
                if (!$_SESSION['error']) {
                    $currentURL = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

                    if ($currentURL === 'http://localhost:3000/?page=error') {
                        header('Location: /');
                        exit;
                    }
                }
                echo $routeMap['error']['index']::index("Something went wrong! Data is ununquie or does not fit to the according format");
                break;
            default:
                echo $routeMap['index']['page404'];
        }


    }


}


//$page = $_GET['page'] ?? '';
//$action = $_GET['action'] ?? '';
//foreach (self::routes() as $route => $content) {
//
//    if ($route === $page) {
//        echo $content;
//        return;
//    }
//
//
//}
//
//foreach (self::routes() as $route => $content){
//    if ($route !== $page) {
//        echo Page404Controller::index();
//        return;
//    }