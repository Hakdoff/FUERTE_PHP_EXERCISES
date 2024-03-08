<?php

namespace src\Model;

class CalculatorModel
{

    public $num1;
    public $num2;
    public $operator;

    public function __construct($num1, $num2, $operator)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operator = $operator;
    }

    public function compute(): int
    {
        switch ($this->operator) {
            case 'add':
                $result = $this->num1 + $this->num2;
                break;

            case 'subt':
                $result = $this->num1 - $this->num2;
                break;

            case 'mult':
                $result = $this->num1 * $this->num2;
                break;

            case 'div':
                $result = $this->num1 / $this->num2;
                break;
        }

        return $result;
    }
}
