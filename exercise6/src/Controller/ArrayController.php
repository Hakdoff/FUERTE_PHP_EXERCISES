<?php

namespace src\Controller;

use src\Model\ArrayModel;

class ArrayController
{
    public function displayArray()
    {
        $numbers = new ArrayModel;
        $numbers->numberSorting();
    }
}
