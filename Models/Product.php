<?php

namespace App\Models;

class Product extends \App\Model
{
    protected static $table = 'products';

    public $name;
    public $price;
    public $brief;
    public $info;

}