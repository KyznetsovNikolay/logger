<?php

declare(strict_types=1);

namespace Core\Http\Router;

use Core\Http\Interfaces\RequestInterface;

class Route implements RouteInterface
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $pattern;

    private $handler;

    /**
     * @var array
     */
    private array $tokens;

    /**
     * @var array
     */
    private array $methods;

    public function __construct($name, $pattern, $handler, array $methods, array $tokens = [])
    {
        $this->name = $name;
        $this->pattern = $pattern;
        $this->handler = $handler;
        $this->tokens = $tokens;
        $this->methods = $methods;
    }

    public function match(RequestInterface $request): ?RouteResult
    {
        if ($this->methods && !\in_array($request->getMethod(), $this->methods, true)) {
            return null;
        }

        $pattern = preg_replace_callback('~\{([^\}]+)\}~', function ($matches) {
            $argument = $matches[1];
            $replace = $this->tokens[$argument] ?? '[^}]+';

            return '(?P<' . $argument . '>' . $replace . ')';
        }, $this->pattern);

        $path = $request->getPath();

        if (!preg_match('~^' . $pattern . '$~i', $path, $matches)) {
            return null;
        }

        return new RouteResult(
            $this->name,
            $this->handler,
            array_filter($matches, '\is_string', ARRAY_FILTER_USE_KEY)
        );
    }

    public function generate($name, array $params = []): ?string
    {
        $arguments = array_filter($params);

        if ($name !== $this->name) {
            return null;
        }

        return preg_replace_callback('~\{([^\}]+)\}~', function ($matches) use (&$arguments) {
            $argument = $matches[1];
            if (!array_key_exists($argument, $arguments)) {
                throw new \InvalidArgumentException('Missing parameter "' . $argument . '"');
            }
            return $arguments[$argument];
        }, $this->pattern);
    }
}
