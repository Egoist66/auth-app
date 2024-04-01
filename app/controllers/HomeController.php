<?php



class HomeController extends Controller
{
    final public static function index(mixed $data = null): string
    {

        session_start();
       
        return view(
            'layout->main.template',
            ["content" => "<h1>Home</h1>"]
        );
    }
}