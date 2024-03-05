<?php 

class ArrayModel 
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

$numbers = new ArrayModel;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Manipulation</title>
    <link rel="stylesheet" href="ArrayStyle.css"/>
</head>
<body>
    <div class="array">
    <h1>Array Manipulation</h1>
    <h4><?php $ranNum = $numbers->numberSorting(); ?></h4><br>
    </div>    
</body>
</html>
