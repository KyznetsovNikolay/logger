<?php

declare(strict_types=1);

namespace Core\Http\Response;

class JsonResponse extends Response
{
    public function getBody()
    {
        return json_encode($this->body);
    }

    protected function addHeaders()
    {
        $this->setDefaultHeaders([
            'Content-type' => 'application/json',
        ]);
    }
}
