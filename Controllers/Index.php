<?php

namespace App\Controllers;

use App\Controller;

class Index extends Controller
{
    protected function action()
    {
        session_start();

        $this->view->auth = new \App\Models\Authorization();
        $this->view->name = $this->view->auth->getCurrentUser();

        $this->view->display( $_SERVER['DOCUMENT_ROOT'] . '/App/Templates/index.php');
    }
}