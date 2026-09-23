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
        dump($articles);
        $users = User::all();
        dump($users);
        // try {
        //     $conn = new PDO("sqlite:" . __DIR__ . '/../../db.sqlite');
        //     // set the PDO error mode to exception
        //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //     $sql = "SELECT * FROM articles";
        //     $result = $conn->query($sql);
        //     $rows = $result->fetchAll();
        //     dump($rows);
        // } catch (PDOException $e) {
        //     echo "Connection failed: " . $e->getMessage();
        // }
        // $title = 'World';
        // view('index', compact('title', 'posts'));
    }

    public function us()
    {
        $title = 'U.S';
        $posts = [
            [
                'title' => 'Some U.S title 1',
                'content' => 'Some U.S content 1',
                'date' => 'January 1, 2021',
                'author' => 'Pets',
            ],
            [
                'title' => 'Some U.S title 2',
                'content' => 'Some U.S content 2',
                'date' => 'January 2, 2021',
                'author' => 'Juss',
            ],
            [
                'title' => 'Some U.S title 3',
                'content' => 'Some U.S content 3',
                'date' => 'January 3, 2021',
                'author' => 'Alex',
            ],
            [
                'title' => 'Some U.S title 4',
                'content' => 'Some U.S content 4',
                'date' => 'January 4, 2021',
                'author' => 'Manivald',
            ],
        ];
        view('us', compact('title', 'posts'));
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
