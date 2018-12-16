<?php

require __DIR__ . '/../autoload.php';

$name = $_GET['ctrl'] ?? 'Index';

$class = '\App\Controllers\\' . $name;

$ctrl = new $class;

try {
    $ctrl();
} catch (\PDOException $exception) {
    echo $exception->getMessage() . 'Нет соединения с БД';
} catch (\Exception $exception){
    echo $exception->getMessage() . 'Пройдите авторизацию';
}



