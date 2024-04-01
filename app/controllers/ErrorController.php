<?php



class ErrorController extends Controller
{
   
    final public static function index(mixed $data = null): string {
        session_start();
        return view('errors->errors.template', ["content" => $data]);
    }
}