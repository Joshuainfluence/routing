<?php

// for live running use PHP -S localhost:9000
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Handler\Contact;
use App\Router;

$router = new Router();

$router->get('/', function () {
    echo 'Home page';
});

$router->get('/about', function (array $params = []) {
    echo 'About page';
    if (!empty($params['username'])) {
        echo '<h1> Hello ' . $params['username'] . '  </h1>';
    }
    
});

$router->get('/contact', Contact::class . '::execute');
$router->post('/contact', function ($params){
    var_dump($params);
});

$router->addNotFoundHandler(function (){
    $title = "Not Found!";
    require_once __DIR__ . "/../templates/404.phtml";
});

$router->run(); 