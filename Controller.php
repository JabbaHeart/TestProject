<?php

namespace App;

abstract class Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new \App\View();
    }

    abstract protected function action();

    protected function access(): bool
    {
        return true;
    }

    public function __invoke()
    {
        if ($this->access()) {
            $this->action();
        } else {
            throw new \Exception('Ошибка доступа: ');
        }
    }

}