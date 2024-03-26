<?php

interface IPage404Controller {
    public static function index(): string;
}
class Page404Controller implements IPage404Controller
{
    public final static function index(): string
    {
       
        return view(
            'layout->main.template',
            ["content" => view('404->not-found.template')]
        );
    }
}