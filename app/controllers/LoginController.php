<?php

interface ILoginController {
    public static function store(): void;
}
class LoginController implements ILoginController
{
    public final static function index(): string
    {
        return view(
            'layout->main.template',
            ["content" => view('login->login.template')]
        );
    }

    /**
     * @return void
     */
    public static function store(): void
    {
        // TODO: Implement store() method.
    }
}