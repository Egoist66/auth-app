<?php

interface IErrorController
{
    public static function index(mixed $data = null): string;
}

class ErrorController implements IErrorController
{
   
    static public final function index(mixed $data = null): string {
        session_start();
        return view('errors->errors.template', ["content" => $data]);
    }
}