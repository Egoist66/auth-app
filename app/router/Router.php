<?php


class Router
{

    public final static function route(): void
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
                echo $routeMap['index']['login'];
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