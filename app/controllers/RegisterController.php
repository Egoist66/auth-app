<?php

interface IRegisterController {
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
        echo "<pre>";
            print_r(validate($_POST['name']));
        echo "</pre>";


    }
}