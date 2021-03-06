<?php

declare(strict_types=1);

namespace Core\Http\Router;

class RouteResult
{
    /**
     * @var string
     */
    private string $name;

    private $handler;

    /**
     * @var array
     */
    private array $attributes;

    public function __construct($name, $handler, array $attributes)
    {
        $this->name = $name;
        $this->handler = $handler;
        $this->attributes = $attributes;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHandler()
    {
        return $this->handler;
    }

    public function getAttributes(): array
    {
        return $this->attributes;
    }
}
