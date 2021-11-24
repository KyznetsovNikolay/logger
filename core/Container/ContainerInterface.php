<?php

namespace Core\Container;

use Core\Container\Exception\ServiceNotFoundException;

interface ContainerInterface
{
    /**
     * @param $id
     * @return mixed
     * @throws ServiceNotFoundException
     */
    public function get($id);

    /**
     * @param $id
     * @return mixed
     */
    public function has($id);
}
