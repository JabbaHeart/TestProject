<?php

namespace App\Controllers;

use App\Controller;

class DeleteRecordGbook extends Controller
{

    protected function action()
    {
        $this->view->record = \App\Models\Record::findById($_GET['id']);
        $this->view->record->delete();

        header('Location:/App/?ctrl=EditGbook');
    }
}