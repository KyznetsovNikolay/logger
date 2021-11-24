<?php

declare(strict_types=1);

namespace Core\Http\Response;

use Core\Http\Interfaces\ResponseInterface;

class ResponseEmitter
{
    public function emit(ResponseInterface $response): void
    {
        header(sprintf(
            'HTTP/%s %d %s',
            $response->getProtocolVersion(),
            $response->getStatusCode(),
            $response->getReasonPhrase()
        ));

        foreach ($response->getHeaders() as $name => $value) {
            header(sprintf('%s: %s', $name, $value), false);
        }

        echo $response->getBody();
    }
}
