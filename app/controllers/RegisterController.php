<?php

interface IRegisterController
{
    public static function store(): void;
}
class RegisterController implements IRegisterController
{
    public final static function index(): string
    {

        return view(
            'layout->main.template',
            ["content" => view('register->register.template')]
        );
    }

    /**
     * @return void
     */
    public static function store(): void
    {
        if (request('post')) {

            $vars = input([
                'name' => 'string',
                'email' => 'string',
                'password' => 'string'
            ]);

            extract($vars);

            print_r($vars);
        }
    }
}
