<?php

namespace src\Model;

class FibonacciModel
{
    public $num;
    public $fnum;
    public $snum;

    public  function __construct($num, $fnum, $snum)
    {
        $this->num = $num;
        $this->fnum = $fnum;
        $this->snum =  $snum;
    }

    public function number(): string
    {
        return  $this->num;
    }

    public function firstNumber(): string
    {
        return   $this->fnum;
    }

    public function secondNumber(): string
    {
        return  $this->snum;
    }

    public function fibonacciSeries()
    {
        for ($i = 2; $i < $this->num; $i++) {
            $next_num = $this->fnum + $this->snum;
            $this->fnum = $this->snum;
            $this->snum = $next_num;
            echo $next_num . ", ";
        }
    }
}
