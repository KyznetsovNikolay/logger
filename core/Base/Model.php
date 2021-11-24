<?php

declare(strict_types=1);

namespace Core\Base;

use Core\Db\DataBase;

abstract class Model
{
    abstract protected static function table(): string;

    abstract protected static function hydrator(): object;

    public static function find($offset, $perPage, array $params = []): array
    {
        $dbh = DataBase::getInstance();

        if ($params['type']) {
            $stmt = $dbh->prepare("SELECT * FROM " . static::table() . " WHERE type = ${params['type']} LIMIT ${offset}, ${perPage}");
        } else if ($params['ts']) {
            $sortBy = strtoupper($params['ts']);
            $stmt = $dbh->prepare("SELECT * FROM " . static::table() . " ORDER BY ts ${sortBy} LIMIT ${offset}, ${perPage}");
        } else {
            $stmt = $dbh->prepare("SELECT * FROM " . static::table() . " LIMIT ${offset}, ${perPage}");
        }

        $stmt->execute();
        $hydtator = static::hydrator();

        $models = [];
        foreach ($stmt->fetchAll(\PDO::FETCH_ASSOC) as $data) {
            $models[] = $hydtator->hydrate($data);

        }
        return $models;
    }
}
