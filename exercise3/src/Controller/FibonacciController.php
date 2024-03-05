<?php 

namespace src\Controller;

use src\Model\FibonacciModel;

class FibonacciController {

    public function getSeries() 
    {
        if(isset($_POST['num']))
        {
        $num1 = $_POST['num'];  
        $num1 = new FibonacciModel($_POST['num'],0, 1);

        echo "Fibonacci Series for " . $num1->number() . ": ";
        echo  $num1->firstNumber() . ", ";
        echo  $num1->secondNumber() . ", ";
        return $num1->fibonacciSeries();
        }
    }
}
