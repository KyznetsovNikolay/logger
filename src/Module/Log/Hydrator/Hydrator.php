<?php

declare(strict_types = 1);

namespace App\Module\Log\Hydrator;

use App\Module\Log\Entity\Log;

class Hydrator
{
    /**
     * @param array $data
     * @return object
     * @throws \Exception
     */
    public function hydrate(array $data): object
    {
        return (new Log())
            ->setId((int) $data['id'])
            ->setTs(new \DateTime($data['ts']))
            ->setType((int) $data['type'])
            ->setMessage($data['message'])
        ;
    }
}
