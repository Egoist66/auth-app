<?php


class LoginController extends Controller
{
    final public static function index(mixed $data = null): string
    {

        return view(
            'layout->main.template',
            ["content" => view('login->login.template')]
        );
    }

    /**
     * @return void
     */
    final public static function store(): void
    {
        validate_csrf();

        sessionRemove('register_error');
        sessionRemove('reg_error_message');

        if (request('post')) {
            $data = input([
                'email' => 'string',
                'password' => 'string',
            ], ['email', 'password']);

            $user = Login::store($data);
            if ($user) {

                sessionRemove('error_login_msg');
                sessionRemove('error_login');

                $_SESSION['auth'] = true;
                $_SESSION['user'] = $user[0];

                redirect(route('page', 'profile'));
            } else {
                $_SESSION['error_login'] = true;
                $_SESSION['error_login_msg'] = 'Wrong email or password';
                redirect(route('page', 'login'));
            }

        }
    }

    final public static function destroy(): void
    {


        sessionClear();

        redirect(route('page', 'login'));
    }
}