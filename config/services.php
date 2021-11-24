<?php

use Core\Container\Container;

return [
    \App\Controller\IndexAction::class => function(Container $container) {
        $perPage = $container->get('params')['per_page'];
        return new \App\Controller\IndexAction($perPage);
    },
    \Core\Http\Resolver::class => function(Container $container) {
        return new \Core\Http\Resolver($container);
    },
];