<?php

declare(strict_types=1);

namespace Core\Http\Request;

class RequestFactory
{
    public static function fromGlobals(array $query = null, array $body = null, array $server = null): Request
    {
        return (new Request())
            ->withQueryParams($query ?: $_GET)
            ->withParsedBody($body ?: $_POST)
            ->withServer($server ?: $_SERVER);
    }
}
