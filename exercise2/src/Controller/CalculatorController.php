<?php

namespace src\Controller;

use src\Model\CalculatorModel;

class CalculatorController
{

    public function getResult()
    {
        if (isset($_POST['num1'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operator'];

            $calculator = new CalculatorModel($num1, $num2, $operator);
            return $result = $calculator->Compute();
        }
    }
}
