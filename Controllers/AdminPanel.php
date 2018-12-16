<?php

namespace App\Controllers;

use App\Controller;

class AdminPanel extends Controller
{
    protected function access(): bool
    {
        session_start();

        $this->view->auth = new \App\Models\Authorization();
        if ($this->view->auth->checkAccess()) {
            return true;
        } else {
            return false;
        }

    }

    protected function action()
    {
        $this->view->display( $_SERVER['DOCUMENT_ROOT'] . '/App/Templates/adminPanel.php');
    }
}