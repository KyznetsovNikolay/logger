<?php

declare(strict_types=1);

namespace Core\Http\Router\Exception;

class RouteNotFoundException extends \LogicException
{
    /**
     * @var
     */
    private string $name;

    /**
     * @var array
     */
    private array $params;

    public function __construct($name, array $params)
    {
        parent::__construct('Route "' . $name . '" not found.');
        $this->name = $name;
        $this->params = $params;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getParams(): array
    {
        return $this->params;
    }
}
