<?php

namespace App\Controllers;

use App\Controller;

class EditNews extends Controller
{
    protected function action()
    {
        $this->view->news = \App\Models\Article::findAll();

        $this->view->display( $_SERVER['DOCUMENT_ROOT'] . '/App/Templates/editNews.php');
    }
}