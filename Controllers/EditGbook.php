<?php

namespace App\Controllers;

use App\Controller;

class EditGbook extends Controller
{
    protected function action()
    {
        $this->view->records = \App\Models\Record::findAll();

        $this->view->display( $_SERVER['DOCUMENT_ROOT'] . '/App/Templates/editGbook.php');
    }
}