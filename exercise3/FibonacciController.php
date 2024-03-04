<?php 
include 'FibonacciModel.php';

if(isset($_POST['num']))
{
    $num1 = $_POST['num'];  
    $num1 = new Fibonacci($_POST['num'],0, 1);

    echo "Fibonacci Series for " . $num1->number() . ": ";
    echo  $num1->firstNumber() . ", ";
    echo  $num1->secondNumber() . ", ";
    $num1->fibonacciSeries();
}
