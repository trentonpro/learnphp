<?php

namespace App\Controllers;

class AuthController
{
    public function loginForm() {

    }

    public function login() {

    }

    public function registerForm() {
        session_start();
        $_SESSION['secret'] = 'Shhh';
        dump($_SESSION);
    }

    public function register() {
        $user = User::where('email', $_POST['email']);
        if($user || $_POST['password'] === $_POST['password_confirm']) {
            return redirect('/register');
        }
        $user = new User();
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
        $user->save();
    }

    public function logout() {

    }
}
