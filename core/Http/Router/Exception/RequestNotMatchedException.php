<?php

declare(strict_types=1);

namespace Core\Http\Router\Exception;

use Core\Http\Interfaces\RequestInterface;

class RequestNotMatchedException extends \LogicException
{
    /**
     * @var RequestInterface
     */
    private RequestInterface $request;

    public function __construct(RequestInterface $request)
    {
        parent::__construct('Matches not found.');
        $this->request = $request;
    }

    /**
     * @return RequestInterface
     */
    public function getRequest(): RequestInterface
    {
        return $this->request;
    }
}
