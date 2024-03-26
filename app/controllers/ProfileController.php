<?php

interface IProfileController {
    public static function store(): void;
}
class ProfileController implements IProfileController 

{
    public final static function index(): string
    {
        if(!isset($_SESSION['auth'])) {
            return  view('errors->errors.template', ["content" => "You are not authorized!"]);
            
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


