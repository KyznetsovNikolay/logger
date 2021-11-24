<?php

declare(strict_types=1);

namespace Core\Http\Router;

use Core\Http\Interfaces\RequestInterface;
use Core\Http\Router\Exception\RequestNotMatchedException;
use Core\Http\Router\Exception\RouteNotFoundException;

class Router
{
    /**
     * @var RouteCollection
     */
    private RouteCollection $routes;

    public function __construct(RouteCollection $routes)
    {
        $this->routes = $routes;
    }

    /**
     * @param RequestInterface $request
     * @return RouteResult
     */
    public function match(RequestInterface $request): RouteResult
    {
        foreach ($this->routes->getRoutes() as $route) {
            if ($result = $route->match($request)) {
                return $result;
            }
        }

        throw new RequestNotMatchedException($request);
    }

    /**
     * @param $name
     * @param array $params
     * @return string
     */
    public function generate($name, array $params = []): string
    {
        foreach ($this->routes->getRoutes() as $route) {
            if (null !== $url = $route->generate($name, $params)) {
                return $url;
            }
        }

        throw new RouteNotFoundException($name, $params);
    }
}
