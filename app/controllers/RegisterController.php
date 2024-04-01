<?php


class RegisterController extends Controller
{
    final public static function index(mixed $data = null): string
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

            validate_csrf();
            $data = input([
                'name' => 'string',
                'email' => 'string',
                'password' => 'string',
            ], ['name', 'email', 'password']);


            $response = Register::store($data);

            if (!$response['created']) {

                sessionSet('register_error', $response['created']);
                sessionSet('reg_error_message', 'Something went wrong! Data is ununquie or does not fit to the according format');

                redirect(route('page', 'register'));
                return;
            }


            if ($response['created']) {

                sessionRemove('register_error');
                sessionRemove('reg_error_message');
                redirect(route('page', 'login'));
            }


        }
    }
}
