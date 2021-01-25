<?php

// https://www.taniarascia.com/the-simplest-php-router/

$request = $_SERVER['REQUEST_URI'];

echo "<pre>$request <hr>";

echo $request . 'views/index.php';

print_r($_SERVER);

switch ($request) {
    case '/' :
        require __DIR__ . '/views/index.php';
        break;
    case '' :
        require __DIR__ . '/views/index.php';
        break;
    case '/about' :
        require __DIR__ . '/views/about.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}