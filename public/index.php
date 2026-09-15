<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css)$/', $_SERVER["REQUEST_URI"])) {
    return false; // serve the requested resource as-is.
}

function dump(...$vars) {
    echo '<pre>';
    var_dump(...$vars);
    echo '</pre>';
}



switch ($_SERVER['REQUEST_URI']) {
    case '/':
        include __DIR__ . '/../views/index.php';
        break;
    case '/us':
        include __DIR__ . '/../views/us.php';
        break;
    default:
        echo '404';
        break;
}