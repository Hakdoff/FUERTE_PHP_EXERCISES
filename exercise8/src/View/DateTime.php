<?php

use src\Controller\DateTimeController; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 8</title>
    <link rel="stylesheet" href="DateTimeStyle.css" />
</head>

<body>
    <div class="datetime">
        <h1 class="h1">Date and Time</h1>
        <?php $array = new DateTimeController();
        $array->displayDateTime();
        ?>
    </div>
</body>

</html>