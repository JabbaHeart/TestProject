<?php

namespace App\Models;

class Authorization
{
    public function getUsersList()
    {
        $userlist = \App\Models\User::findAll();
        return $userlist;
    }

    public function existsUser($login)
    {
        $users = $this->getUsersList();
        foreach ($users as $user){
            if ($user->getLogin() == $login) {
                return true;
            }
        }
    }

    public function checkPassword($login, $password)
    {
        $users = $this->getUsersList();
        if ($this->existsUser($login)) {
            foreach ($users as $user) {
                if ($user->getLogin() == $login) {
                    $_SESSION['login'] = $user->getLogin();
                    if ($user->getPassword() == password_verify($password, $user->getPassword())) {
                        return true;
                    }
                }
            }
        }
    }

    public function getCurrentUser()
    {
        $users = $this->getUsersList();
        if (!isset($_SESSION['login'])) {
            return null;
        } else {
            foreach ($users as $user) {
                if ($user->getLogin() == $_SESSION['login']) {
                    return $user->getUsername();
                }
            }
        }

    }

    public function checkAccess()
    {
        $users = $this->getUsersList();
        if (!isset($_SESSION['login'])) {
            return null;
        } else {
            foreach ($users as $user) {
                if ($user->getLogin() == $_SESSION['login']) {
                    if ($user->getAccess() == 1) {
                        return true;
                    }
                }
            }
        }
    }

    public function checkAccessAllUsers()
    {
        if (!empty($_SESSION['login'])) {
            return true;
        }
    }

}