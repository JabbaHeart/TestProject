<?php

namespace App\Controllers;

use App\Controller;

class News extends Controller
{
    protected function action()
    {
        session_start();

        $this->view->news = \App\Models\Article::findAll();

        $this->view->display( $_SERVER['DOCUMENT_ROOT'] . '/App/Templates/news.php');
    }
}