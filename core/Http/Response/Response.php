<?php

declare(strict_types=1);

namespace Core\Http\Response;

use Core\Http\Interfaces\ResponseInterface;

abstract class Response implements ResponseInterface
{
    /**
     * @var array
     */
    private array $headers = [];

    /**
     * @var string
     */
    protected $body;

    /**
     * @var int|mixed
     */
    private $statusCode;

    /**
     * @var string
     */
    private string $reasonPhrase = '';

    /**
     * @var string
     */
    private string $protocolVersion = '1.1';

    /**
     * @var array|string[]
     */
    private static array $phrases = [
        200 => 'OK',
        301 => 'Moved Permanently',
        400 => 'Bad Request',
        403 => 'Forbidden',
        404 => 'Not Found',
        500 => 'Internal Server Error',
    ];

    public function __construct($body, $status = 200)
    {
        $this->body = $body;
        $this->statusCode = $status;
        $this->addHeaders();
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     * @return $this
     */
    public function withBody($body): self
    {
        $new = clone $this;
        $new->body = $body;
        return $new;
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * @return string
     */
    public function getReasonPhrase(): string
    {
        if (!$this->reasonPhrase && isset(self::$phrases[$this->statusCode])) {
            $this->reasonPhrase = self::$phrases[$this->statusCode];
        }
        return $this->reasonPhrase;
    }

    /**
     * @param mixed $code
     * @param string $reasonPhrase
     * @return $this
     */
    public function withStatus($code, $reasonPhrase = ''): self
    {
        $new = clone $this;
        $new->statusCode = $code;
        $new->reasonPhrase = $reasonPhrase;
        return $new;
    }

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @param $header
     * @return bool
     */
    public function hasHeader($header): bool
    {
        return isset($this->headers[$header]);
    }

    /**
     * @param $header
     * @return mixed|null
     */
    public function getHeader($header)
    {
        if (!$this->hasHeader($header)) {
            return null;
        }
        return $this->headers[$header];
    }

    /**
     * @param string $header
     * @param mixed $value
     * @return $this
     */
    public function withHeader($header, $value): self
    {
        $new = clone $this;
        if ($new->hasHeader($header)) {
            unset($new->headers[$header]);
        }
        $new->headers[$header] = $value;
        return $new;
    }

    /**
     * @param array $headers
     */
    protected function setDefaultHeaders(array $headers)
    {
        foreach ($headers as $header => $value) {
            if ($this->hasHeader($header)) {
                unset($this->headers[$header]);
            }
            $this->headers[$header] = $value;
        }
    }

    /**
     * @return string
     */
    public function getProtocolVersion(): string
    {
        return $this->protocolVersion;
    }

    abstract protected function addHeaders();
}
