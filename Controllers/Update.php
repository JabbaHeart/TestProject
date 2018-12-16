<?php

namespace App\Controllers;

use App\Controller;

class Update extends Controller
{
    protected function action()
    {
        $this->view->article = \App\Models\Article::findById($_GET['id']);

        if (!empty($_POST['header']) && !empty($_POST['message'])) {
            $this->view->article->header = $_POST['header'];
            $this->view->article->message = $_POST['message'];

            $this->view->article->update();

            header('Location:/App/?ctrl=EditNews');
        } else {
            header('Location:/App/formForUpdateArticle.php');
        }
    }
}