<?php 

spl_autoload_register(function ($class) 
{
    $path =  __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    require_once $path;
});

use src\View\CalculatorView;

$calculatorView = new CalculatorView();
$calculatorView->render();