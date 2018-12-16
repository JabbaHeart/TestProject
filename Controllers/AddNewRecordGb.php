<?php

namespace App\Controllers;

class AddNewRecordGb extends \App\Controller
{
    protected function action()
    {
        session_start();

        $this->view->record = new \App\Models\Record();

        if (!empty($_POST['text'])) {
            $this->view->record->create($_POST['text']);
            header('Location:/App/?ctrl=Guestbook');
        } else {
            header('Location:/App/?ctrl=Guestbook');
        }
    }
}