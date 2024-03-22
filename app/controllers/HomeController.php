<?php

interface IHomeController
{
    public static function index(): string;
}

class HomeController implements IHomeController
{
    public final static function index(): string
    {
        Users::create();
        
        return view(
            'layout->main.template',
            ["content" => "<h2>Home</h2>"]
        );
    }
}