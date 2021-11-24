<?php

declare(strict_types=1);

namespace Core\Http\Response;

class HtmlResponse extends Response
{
    protected function addHeaders()
    {
        $this->setDefaultHeaders([
            'Content-type' => 'text/html',
        ]);
    }
}