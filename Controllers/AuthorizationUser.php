<?php

namespace App\Controllers;

use App\Controller;

class AuthorizationUser extends Controller
{
    protected function action()
    {
        session_start();

        $this->view->auth = new \App\Models\Authorization();

        if (!empty($_POST['login']) && !empty($_POST['password'])) {

            if ($this->view->auth->checkPassword($_POST['login'], $_POST['password'])) {
                header('Location:/App/?ctrl=Index');
            } else {
                header('Location:/App/?ctrl=AuthorizationUser');
            }
        } else {
            $this->view->display( $_SERVER['DOCUMENT_ROOT'] . '/App/Templates/authorization.php');
        }

    }
}