<?php

namespace Core\Container\Exception;

class ServiceNotFoundException extends \InvalidArgumentException implements NotFoundExceptionInterface
{
}