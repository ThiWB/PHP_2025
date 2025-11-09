<?php
require_once dirname(__DIR__) . '/init.php';

$path = $_GET['path'] ?? 'home';

switch ($path) {
    case 'home':
        require dirname(__DIR__) . '/public/pages/home.php';
        break;
    case 'auth/login':
        require dirname(__DIR__) . '/auth/login.php';
        break;
    case 'auth/register':
        require dirname(__DIR__) . '/auth/register.php';
        break;
    default:
        http_response_code(404);
        require dirname(__DIR__) . '/public/pages/404.php';
        break;
}
?>