<?php use src\Controller\ArrayController; ?>

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
    <h4><?php $array = new ArrayController();
    $array->displayArray(); ?></h4><br>
    </div>    
</body>
</html>
