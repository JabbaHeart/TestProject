<?php

namespace App\Controllers;

use App\Controller;

class Delete extends Controller
{
    protected function action()
    {
        $this->view->article = \App\Models\Article::findById($_GET['id']);
        $this->view->article->delete();

        header('Location:/App/?ctrl=EditNews');
    }
}