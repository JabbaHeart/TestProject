<?php

namespace App;

class Db
{
    protected $dbh;

    public function __construct()
    {
        $config = new \App\Configclass();

        try {
            $dsn = 'mysql:host=' . $config->data['host'] . ';dbname=' . $config->data['dbname'] . ';';
            $this->dbh = new \PDO($dsn, $config->data['login'], $config->data['password']);
        } catch (\PDOException $exception) {
            throw new DbException('Ошибка: ');
        }
    }

    public function query(string $sql, $class, array $data = null)
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    public function execute($query, array $params)
    {
        $sth = $this->dbh->prepare($query);
        return $sth->execute($params);
    }

    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }

}


