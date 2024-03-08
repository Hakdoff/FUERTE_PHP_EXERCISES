<?php

namespace src\Model;

class ArrayModel
{

    public function numberSorting()
    {
        $number = range(0, 100);
        shuffle($number);
        $numberArray = array_slice($number, 0, 10);
        $randomizeNumber = implode(' ,', $numberArray);
        echo "Array to be sorted: " . $randomizeNumber;
        echo "<br><br>";
        $Ascending = array_slice($number, 0, 10);
        sort($Ascending);
        $randomAscending = implode(' ,', $Ascending);
        echo "Ascending Order: " . $randomAscending;
        echo "<br><br>";
        $Descending = array_slice($number, 0, 10);
        rsort($Descending);
        $randomDescending = implode(' ,', $Descending);
        echo "Descending Order: " . $randomDescending;
    }
}
