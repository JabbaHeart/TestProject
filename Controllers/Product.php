<?php

namespace App\Controllers;

use App\Controller;

class Product extends Controller
{
    protected function action()
    {
        $this->view->product = \App\Models\Product::findById($_GET['id']);

        $this->view->display( $_SERVER['DOCUMENT_ROOT'] . '/App/Templates/product.php');
    }
}