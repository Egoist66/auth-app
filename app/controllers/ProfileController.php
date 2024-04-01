<?php


class ProfileController extends Controller

{
    final public static function index(mixed $data = null): string
    {
        if (!isset($_SESSION['auth'])) {
            return view('errors->errors.template', ["content" => "You are not authorized!"]);

        }


        return view(
            'layout->main.template',
            ["content" => view('profile->profile.template', ['user' => $_SESSION['user']])]
        );
    }

    /**
     * @return void
     */
    public static function store(): void
    {

    }
}


