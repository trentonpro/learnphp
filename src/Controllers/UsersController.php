<?php

namespace App\Controllers;

use App\Models\User;

class UsersController
{
    public function index() {
        $users = User::all();
        $title = 'Users';
        $token = $this->token();
        view('users/index', compact('title', 'users', 'token'));
    }

    public function view() {
        $user = $this->findUser();
        if (!$user) {
            return;
        }
        $title = 'User';
        $token = $this->token();
        view('users/view', compact('title', 'user', 'token'));
    }

    public function edit() {
        $user = $this->findUser();
        if (!$user) {
            return;
        }
        $title = 'Edit User';
        $token = $this->token();
        view('users/edit', compact('title', 'user', 'token'));
    }

    public function update() {
        if (!$this->checkToken()) {
            return;
        }
        $user = $this->findUser();
        if (!$user) {
            return;
        }
        $user->name = trim($_POST['name'] ?? '');
        $user->email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';
        $errors = [];

        if ($user->name === '') {
            $errors['name'] = 'Name is required.';
        }
        if (!filter_var($user->email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Enter a valid email address.';
        }
        foreach (User::all() as $existingUser) {
            if ($existingUser->id != $user->id && strcasecmp($existingUser->email, $user->email) === 0) {
                $errors['email'] = 'This email address is already in use.';
            }
        }
        if ($password !== '' && strlen($password) < 8) {
            $errors['password'] = 'Use at least 8 characters.';
        }
        if ($errors) {
            http_response_code(422);
            $title = 'Edit User';
            $token = $this->token();
            view('users/edit', compact('title', 'user', 'token', 'errors'));
            return;
        }
        if ($password !== '') {
            $user->password = password_hash($password, PASSWORD_DEFAULT);
        }
        $user->save();
        redirect('/admin/users');
    }

    public function delete() {
        if (!$this->checkToken()) {
            return;
        }
        $user = $this->findUser();
        if ($user) {
            $user->delete();
            redirect('/admin/users');
        }
    }

    private function findUser() {
        $id = filter_var($_GET['id'] ?? null, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);
        $user = $id ? User::find($id) : false;
        if (!$user) {
            http_response_code(404);
            echo '404';
        }
        return $user;
    }

    private function token() {
        return $_SESSION['users_csrf'] ??= bin2hex(random_bytes(32));
    }

    private function checkToken() {
        $token = $_POST['_token'] ?? '';
        if (!is_string($token) || !isset($_SESSION['users_csrf']) || !hash_equals($_SESSION['users_csrf'], $token)) {
            http_response_code(419);
            echo 'Please reload the form and try again.';
            return false;
        }
        return true;
    }
}
