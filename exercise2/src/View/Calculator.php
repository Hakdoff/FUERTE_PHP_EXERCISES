<?php use src\Controller\CalculatorController; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator
    </title>
    <link rel="stylesheet" href="CalculatorStyle.css">
</head>

<body>
    <div class="calculator">
        <h1>Simple Calculator</h1>
        <?php $calculatorResult = new CalculatorController(); ?>
        <form action="" method="POST">
            <div class="input">
                <label for="num1"> Enter a Number: </label>
                <input type="number" id="num1" name="num1">
            </div>
            <div class="operator">
                <select class="operator" name="operator" id="operator">
                    <option value="add">Add</option>
                    <option value="subt">Subtract</option>
                    <option value="mult">Multiply</option>
                    <option value="div">Divide</option>
                </select>
            </div>
            <div class="input">
                <label for="num2"> Enter another number:</label>
                <input type="number" id="num2" name="num2">
            </div><br>
            <button class="submit" type="submit">Calculate</button>
        </form>
        <h3>
            <?php echo "Result: " .  $calculatorResult->getResult();?>
        </h3>
    </div>
</body>
</html>
