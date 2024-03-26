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
    public final static function store(): void
    {
        
        sessionRemove('register_error');
        sessionRemove('reg_error_message');

        if(request('post')) {
            $data = input([
                'email' => 'string',
                'password' => 'string',
            ], ['email', 'password']);

        $user = Login::store($data);
        if($user) {
            
            $_SESSION['auth'] = true;
            $_SESSION['user'] = $user[0];
           
            redirect(route('page', 'profile'));
        }
        else {
            
            redirect(route('page', 'login'));
        }    

        }
    }

    public final static function destroy(){

      
        sessionClear();
        
        redirect(route('page', 'login'));
    }
}