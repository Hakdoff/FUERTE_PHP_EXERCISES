
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="fiboStyle.css">
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
<h4 >
    <?php   
  include 'fiboModel.php';
?>
</h4>
    </div>
    
</body>
</html>