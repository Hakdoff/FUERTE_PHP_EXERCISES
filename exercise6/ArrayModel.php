<?php

class ArrayManipulation 
{

    public function numberSorting() 
    {
        $random = range(0, 100);
        shuffle($random);
        $ran = array_slice($random, 0,10);
        $rand = implode(' ,', $ran );
        echo "Array to be sorted: " . $rand;
        echo "<br><br>";
        $randomAsc = array_slice($random, 0,10);
        sort($randomAsc);
        $ranAsc = implode(' ,', $randomAsc );
        echo "Ascending Order: " .$ranAsc;
        echo "<br><br>";
        $randomAsc = array_slice($random, 0,10);
        sort($randomAsc);
        $ranAsc = implode(' ,', $randomAsc );
        echo "Descending Order: " .$ranAsc;
    }  
}
