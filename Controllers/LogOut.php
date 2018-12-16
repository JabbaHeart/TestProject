<?php

namespace App\Controllers;

use App\Controller;

class LogOut extends Controller
{
    protected function action()
    {
        session_start();

        unset ($_SESSION['login']);

        header('Location:/App/?ctrl=Index');
    }
}