<?php

namespace App\Controllers;

class FormForUpdateArticle extends \App\Controller
{
    protected function action()
    {
        $this->view->article = \App\Models\Article::findById($_GET['id']);

        $this->view->display( $_SERVER['DOCUMENT_ROOT'] . '/App/Templates/formForUpdateArticle.php');
    }
}