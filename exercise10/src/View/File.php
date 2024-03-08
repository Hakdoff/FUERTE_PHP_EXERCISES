<?php

use src\Controller\FileController;

$fileController = new FileController();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 10</title>
    <link rel="stylesheet" href="StyleFile.css" />
</head>

<body>
    <div class="file">
        <form method="POST">
            <h1>Basic File Operation</h1>
            <div class="input">
                <label for="filename"> Enter File Name: </label>
                <input type="text" id="filename" name="filename">
                <label for="content"> Add your file Contents: </label>
                <textarea id="content" name="content" cols="5" rows="5"></textarea><br>
                <input type="submit" class="submit" id="operation" name="operation" value="Create"></input><br><br>
                <hr>
                <select name="read" id="read">
                    <?php
                    $files = glob('../EXERCISE10/*.txt');
                    foreach ($files as $file) {
                        $fileName = pathinfo($file, PATHINFO_FILENAME);
                    ?>
                        <option>
                        <?php
                        echo $fileName . "<br>";
                    }
                        ?>
                        <input type="submit" class="submit" id="operation" name="operation" value="Read"> </input><br><br>
                        <?php
                        $fileController->fileOperation();
                        ?>
                        <br><br>
                </select>
                <hr>
                <select name="delete" id="delete">
                    <?php
                    $files = glob('../EXERCISE10/*.txt');
                    foreach ($files as $file) {
                    ?>
                        <option name="delete" id="delete">
                        <?php
                        echo basename($file) . "<br>";
                    }
                        ?>
                        </option>
                </select>
                <input type="submit" class="submit" id="operation" name="operation" value="Delete"> </input><br>
            </div>
        </form>
    </div>
</body>

</html>