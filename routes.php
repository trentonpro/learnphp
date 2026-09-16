<?php
namespace App;
 
class Router {
    private static $routes = [];
 
    public static function getRoutes() {
        return self::$routes;
    }
 
    public static function addRoute($path, $action) {
        self::$routes[] = ['path' => $path, 'action' => $action];
    }
 
    public function __construct(private $path)
    {
 
    }
 
    public function match() {
        foreach(self::$routes as $route){
            if($route['path'] === $this->path){
                return $route;
            }
        }
        return false;
    }
}

Router::addRoute('/', function () {
    $title = 'World';
    $posts = [
        [
            'title' => 'Some world title 1',
            'content' => 'Some world content 1',
            'date' => 'January 1, 2021',
            'author' => 'Pets',
        ],
        [
            'title' => 'Some world title 2',
            'content' => 'Some world content 2',
            'date' => 'January 2, 2021',
            'author' => 'Juss',
        ],
        [
            'title' => 'Some world title 3',
            'content' => 'Some world content 3',
            'date' => 'January 3, 2021',
            'author' => 'Alex',
        ],
        [
            'title' => 'Some world title 4',
            'content' => 'Some world content 4',
            'date' => 'January 4, 2021',
            'author' => 'Manivald',
        ],
    ];
    include __DIR__ . '/../views/index.php';
});

Router::addRoute('/us', function () {
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
        include __DIR__ . '/../views/us.php';
});