<?php

namespace App\Models;

class Article extends \App\Model
{
    protected static $table = 'news';

    public $header;
    public $message;

    public static function getLastNews()
    {
        $db = new \App\Db();
        $sql = 'SELECT * FROM ' . static::$table . ' ORDER BY id DESC LIMIT 3';
        return $db->query($sql, self::class);
    }

}