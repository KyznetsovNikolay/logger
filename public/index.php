<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Core\Container\Container;
use Core\Http\Request\RequestFactory;
use Core\Http\Resolver;
use Core\Http\Response\JsonResponse;
use Core\Http\Response\ResponseEmitter;
use Core\Http\Router\Router;

chdir(dirname(__DIR__));
require_once 'vendor/autoload.php';

$request = RequestFactory::fromGlobals();
$routeCollection = require_once 'config/routes.php';
$router = new Router($routeCollection);
$container = new Container(require_once 'config/services.php');
$container->set('params', require_once 'config/params.php');

try {
    $result = $router->match($request);
    $resolver = $container->get(Resolver::class);
    foreach ($result->getAttributes() as $attribute => $value) {
        $request = $request->withAttribute($attribute, $value);
    }

    $action = $resolver->resolve($result->getHandler());
    $response = $action($request);

} catch(\Exception $e) {
    $response = (new JsonResponse(['error' => $e->getMessage()], 404))
        ->withHeader('ERROR', 'some_error');
}

$response = $response->withHeader('X-product_version', '1.0');

(new ResponseEmitter())->emit($response);