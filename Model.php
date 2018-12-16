<?php

namespace App;

abstract class Model
{
    protected static $table = null;
    public $id;

    public function insert()
    {
        $properties = get_object_vars($this);

        $columns = [];
        $binds = [];
        $data = [];

        foreach ($properties as $name=>$value) {
            if ('id' === $name) {
                continue;
            }
            $columns[] = $name;
            $binds[] = ':' . $name;
            $data[':' . $name] = $value;
        }

        $sql = 'INSERT INTO ' . static::$table . ' (' . implode(', ', $columns) . ') 
        VALUES (' . implode(', ', $binds) . ')';

        $db = new Db();
        $db->execute($sql, $data);
        $this->id = $db->lastInsertId();
    }

    public function update()
    {
        $properties = get_object_vars($this);

        $binds = [];
        $data = [];

        foreach ($properties as $name=>$value) {

            $binds[] = $name . '=:' . $name;
            $data[':' . $name] = $value;
        }

        $sql = 'UPDATE ' . static::$table . ' SET ' . implode(', ', $binds). ' WHERE id=:id';

        $db = new Db();
        return $db->execute($sql, $data);
    }

    public function isNew()
    {
        if('id' === $this->id) {
            return true;
        }
    }

    public function save()
    {
        if ($this->isNew()) {
            $this->insert();
        } else {
            $this->update();
        }
    }

    public function delete()
    {
        $sql = 'DELETE FROM ' . static::$table . ' WHERE id=:id';
        $db = new Db();
        return $db->execute($sql, [':id'=>$this->id]);
    }

    public static function findAll()
    {
        $db = new Db;
        $sql = 'SELECT * FROM ' . static::$table . ';';
        $data = $db->query($sql, static::class);
        return $data;
    }

    public static function findById($id)
    {
        $db = new Db;
        $sgl = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
        $bind = [':id'=>$id];
        $arr = $db->query($sgl, static::class, $bind );

        if (empty($arr)) {
            return null;
        } else {
            return $object = $arr[0];
        }
    }

}