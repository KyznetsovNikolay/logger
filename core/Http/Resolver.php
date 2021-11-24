<?php

declare(strict_types=1);

namespace Core\Http;

use Core\Container\ContainerInterface;

class Resolver
{
    /**
     * @var ContainerInterface
     */
    private ContainerInterface $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function resolve($handler): callable
    {
        return \is_string($handler) ? $this->container->get($handler) : $handler;
    }
}
