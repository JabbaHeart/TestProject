<?php

namespace App;

class Configclass
{
    public $data = [];

    public function __construct()
    {
        require __DIR__ . '/config.php';
        $data = [];

        foreach ($config as $key=>$value) {
            $data[$key] = $value;
        }

        $this->data = $data;
    }

}