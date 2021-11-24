<?php

declare(strict_types=1);

namespace Core\Http\Request;

use Core\Http\Interfaces\RequestInterface;

class Request implements RequestInterface
{
    /**
     * @var array
     */
    private array $queryParams;

    /**
     * @var mixed|null
     */
    private $parsedBody;

    /**
     * @var array|mixed
     */
    private $server;

    /**
     * @var array
     */
    private array $attributes;

    /**
     * @var null|string
     */
    private ?string $method = null;

    /**
     * @var null|string
     */
    private ?string $uri = null;

    public function __construct(array $queryParams = [], $parsedBody = null, $server = [])
    {
        $this->queryParams = $queryParams;
        $this->parsedBody = $parsedBody;
        $this->server = $server;
    }

    /**
     * @param $data
     * @return $this
     */
    public function withParsedBody($data): self
    {
        $new = clone $this;
        $new->parsedBody = $data;
        return $new;
    }

    /**
     * @param $data
     * @return $this
     */
    public function withServer($data): self
    {
        $new = clone $this;
        $new->server = $data;
        return $new;
    }

    /**
     * @param string $attributeId
     * @param $value
     * @return $this
     */
    public function withAttribute(string $attributeId, $value): self
    {
        $new = clone $this;
        $new->attributes[$attributeId] = $value;
        return $new;
    }

    /**
     * @param string $attributeId
     * @return mixed|null
     */
    public function getAttribute(string $attributeId)
    {
        if (!array_key_exists($attributeId, $this->attributes)) {
            return null;
        }
        return $this->attributes[$attributeId];
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param array $query
     * @return $this
     */
    public function withQueryParams(array $query): self
    {
        $new = clone $this;
        $new->queryParams = $query;
        return $new;
    }

    /**
     * @return array
     */
    public function getQueryParams(): array
    {
        return $this->queryParams;
    }

    /**
     * @return array|null
     */
    public function getParsedBody(): ?array
    {
        return $this->parsedBody;
    }

    /**
     * @param string $method
     * @return $this
     */
    public function withMethod(string $method): self
    {
        $new = clone $this;
        $new->method = $method;
        return $new;
    }

    /**
     * @param string $uri
     * @return $this
     */
    public function withUri(string $uri): self
    {
        $new = clone $this;
        $new->uri = $uri;
        return $new;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method ?? $this->server['REQUEST_METHOD'];
    }

    public function locationTo(string $path)
    {
        header('Location: ' . $path);
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->uri ?? explode('?', $this->server['REQUEST_URI'])[0];
    }
}
