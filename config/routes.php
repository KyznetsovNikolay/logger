<?php

$routeCollection = new Core\Http\Router\RouteCollection();

$routeCollection->get('home', '/', \App\Controller\IndexAction::class);
$routeCollection->any('create', '/create', \App\Controller\CreateAction::class);

return $routeCollection;