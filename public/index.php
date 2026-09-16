<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}
 
spl_autoload_register(function ($class){
    $class = substr($class,4);
    $class = str_replace('\\', '/', $class);
    require_once __DIR__ . "/../src/$class.php";
});

require __DIR__ . '/../helpers.php';
require __DIR__ . '/../routes.php';

$router = new App\Router($_SERVER['REQUEST_URI']);
$match = $router->match();
if ($match) {
    call_user_func($match['action']);
} else {
    echo 404;
}

// dump(Router::getRoutes());
 
// switch ($_SERVER['REQUEST_URI']) {
//     case '/':
//         break;
//     case '/us':
//         break;
//     default:
//         echo '404';
// }
 