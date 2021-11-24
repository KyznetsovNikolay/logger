<?php

declare(strict_types = 1);

namespace Core\View;

final class View
{
    private static $sections = [];

    private static $layout = null;

    public static function extends($path)
    {
        $path = 'resources/views/' . $path . '.phtml';

        if (!file_exists($path)) {
            throw new \Exception('Layout file does not exit.');
        }

        self::$layout = $path;
    }

    public static function section(string $key, string $value)
    {
        self::$sections[$key] = $value;
    }

    public static function yield(string $key)
    {
        echo self::$sections[$key] ?? '';
    }

    public static function render(string $path, array $data = [])
    {
        $path = 'resources/views/' . $path . '.phtml';

        if (!file_exists($path)) {
            throw new \Exception('View file does not exists.');
        }

        extract($data);

        ob_start();
        require_once $path;
        $output = ob_get_clean();

        if (self::$layout !== null) {
            ob_start();
            require_once self::$layout;
            $output = ob_get_clean();
        }

        return $output;
    }

    public static function startSection(string $name)
    {
        ob_start();
        self::$sections[$name] = null;
    }

    public static function endSection(string $name)
    {
        self::$sections[$name] = ob_get_clean();
    }
}
