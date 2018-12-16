<?php

namespace App;

use App\Models\SetGetIsset;

class View
{
    protected $data = [];

    use SetGetIsset;

    public function display($template)
    {
        foreach ($this->data as $name=>$value) {
            $$name = $value;
        }
        include $template;
    }

}