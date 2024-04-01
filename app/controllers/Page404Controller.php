<?php


class Page404Controller extends Controller
{
    final public static function index(mixed $data = null): string
    {
       
        return view(
            'layout->main.template',
            ["content" => view('404->not-found.template')]
        );
    }
}