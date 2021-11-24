<?php

namespace Core\Http\Router;

use Core\Http\Interfaces\RequestInterface;

interface RouteInterface
{
    public function match(RequestInterface $request): ?RouteResult;

    public function generate($name, array $params = []): ?string;
}
