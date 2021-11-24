<?php

declare(strict_types=1);

namespace Core\Db;

class DataBase
{
    public static $instance = null;

    /**
     * @return \PDO|null
     */
    public static function getInstance(): ?\PDO
    {
        $config = (require __DIR__ . '/../../config/params.php')['db'];
        if (is_null(self::$instance)) {
            self::$instance = new \PDO($config['dsn'], $config['user'], $config['password']);
        }
        return self::$instance;
    }

    private function __construct() {}

    private function __clone() {}
}
