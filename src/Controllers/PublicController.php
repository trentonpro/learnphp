<?php

namespace App\Controllers;


use App\Models\Article;
use App\Models\User;
use PDO;
use PDOException;

class PublicController
{
    public function index()
    {
        $articles = Article::all();
        $title = 'World';
        view('index', compact('title', 'posts'));
    }

    public function us()
    {
        $title = 'U.S';
        $articles = Article::all();
        view('us', compact('title', 'articles'));
    }

    public function forms()
    {
        view('forms');
    }

    public function answer()
    {
        dump($_GET);
        dump($_POST);
    }
}
