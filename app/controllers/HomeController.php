<?php

interface IHomeController
{
    public static function index(): string;
}

class HomeController implements IHomeController
{
    public final static function index(): string
    {

        session_start();
       
        return view(
            'layout->main.template',
            ["content" => "<h2>Home</h2>"]
        );
    }
}