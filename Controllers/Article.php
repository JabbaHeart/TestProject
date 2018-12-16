<?php

namespace App\Controllers;

use App\Controller;

class Article extends Controller
{
    protected function action()
    {
        $this->view->article = \App\Models\Article::findById($_GET['id']);
        $id = $this->view->article->author_id;
        $this->view->author = \App\Models\Author::findById($id);

        $this->view->display( $_SERVER['DOCUMENT_ROOT'] . '/App/Templates/article.php');
    }
}