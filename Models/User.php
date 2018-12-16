<?php

namespace App\Models;

class User extends \App\Model
{
    protected static $table = 'users';

    protected $username;
    protected $login;
    protected $password;
    protected $access;

    public function getUsername()
    {
        return $this->username;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getAccess()
    {
        return $this->access;
    }

}