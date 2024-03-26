<?php


// This code defines a function called csrf_field that generates a hidden input field with a CSRF token. If the CSRF token is not set in the session, it generates a new one using random_bytes and stores it in the session. The function then returns the HTML for the hidden input with the CSRF token value.

function csrf_field()
{
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }

    return '<input type="hidden" name="csrf_token" value="' . $_SESSION['csrf_token'] . '">';
}

function validate_csrf()
{
    if (!isset($_SESSION['csrf_token']) || !isset($_POST['csrf_token']) || $_SESSION['csrf_token'] !== $_POST['csrf_token'])
    {
        session_destroy();
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        die();
    }
}