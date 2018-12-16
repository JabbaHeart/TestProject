<?php

namespace App\Models;

class Record extends \App\Model
{
    protected static $table = 'guestbook';

    protected $message;
    protected $author;

    public function getId()
    {
        return $this->id;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function create($text)
    {
        $users = \App\Models\User::findAll();

        foreach ($users as $user) {
            if ($_SESSION['login'] == $user->getLogin()) {
                $name = $user->getUsername();
            }
        }
        $param = [$name, $text];
        $sql = 'INSERT INTO guestbook (author, message) VALUES (?, ?)';

        $db = new \App\Db();
        $db->execute($sql, $param);
    }

}