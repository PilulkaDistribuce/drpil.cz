<?php
declare(strict_types=1);

use DrPil\Application;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\TextResponse;
use Zend\HttpHandlerRunner\Emitter\SapiEmitter;

require __DIR__ . '/vendor/autoload.php';

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals();
$router = new League\Route\Router;

$router->get('/', function (ServerRequestInterface $request) : ResponseInterface {
    return new TextResponse('Pilulka zkracovač');
});
$router->get('/u/{id}', function (ServerRequestInterface $request, $args) : ResponseInterface {
    return new TextResponse($args['id']);
});

$response = $router->dispatch($request);

(new SapiEmitter())->emit($response);