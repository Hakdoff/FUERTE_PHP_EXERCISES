
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style.css">
    <title>Fibonacci Sequence</title>  
</head>
<body>
    <div class="fibonacci"><br>
      <h1>Fibonacci Series</h1>
    <form method="post" action="">
        Enter a number: <input type="number" name="num" required>
        <br> <br>
      <button class="submit" type="submit">Submit</button>
    </form>

<h4>
    <?php 

if(isset($_POST['num'])){
$num = $_POST['num'];

     $num;
     $fnum = 0;
     $snum = 1;

    echo "Fibonacci Series for $num: " . "$fnum, " . " " . " $snum, ";

    for ($i = 2; $i < $num; $i++) {  
            $next_num = $fnum + $snum;  
            $fnum = $snum;
            $snum = $next_num;
            echo $next_num . ", ";
        }
}
?>
</h4>
    </div>
    
</body>
</html>