<?php

use src\Controller\StringController; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 8</title>
    <link rel="stylesheet" href="StringStyle.css" />
</head>

<body>
    <div class="string">
        <h1 class="h1">String Manipulation</h1>
        <h4>
            <?php
            $stringContoller = new StringController();
            $stringContoller->displayString();
            ?>
        </h4>
    </div>
</body>

</html>