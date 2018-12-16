<?php

namespace App\Controllers;

use App\Controller;

class Products extends Controller
{
    protected function action()
    {
        $this->view->products = \App\Models\Product::findAll();

        $this->view->display( $_SERVER['DOCUMENT_ROOT'] . '/App/Templates/products.php');
    }
}