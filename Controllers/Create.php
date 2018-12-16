<?php

namespace App\Controllers;

use App\Controller;

class Create extends Controller
{
    protected function action()
    {
        $this->view->article = new \App\Models\Article();

        if (!empty ($_POST['header']) && !empty ($_POST['message'])) {
            $this->view->article->header = $_POST['header'];
            $this->view->article->message = $_POST['message'];

            $this->view->article->insert();

            header('Location:/App/?ctrl=EditNews');
        } else {
            header('Location:/App/?ctrl=EditNews');
        }
    }
}