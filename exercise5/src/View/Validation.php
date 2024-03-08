<?php

use src\Controller\ValidationController;

$userValidation = new ValidationController();
$userValidation->validation();
$userValidation->emptyUsername();
$userValidation->emptyPassword();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="ValidationStyle.css">
</head>

<body>
    <div class="login"><br>
        <h1>Login</h1>
        <div class="red">
            <h4>
                <?php if (isset($userValidation) && $userValidation->getErrorMessage()) { ?>
                    <p><?php echo $userValidation->getErrorMessage(); ?></p>
                <?php } ?>
            </h4>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
            <label for="uname">Username:</label>
            <input type="text" name="uname" id="uname"></input>
            <br><br>
            <label for="pass">Password:</label>
            <input type="password" name="pass" id="pass"></input><br><br>
            <button class="submit" type="submit" name="login">Login</button>
        </form>
        <h4>
            <?php if (isset($userValidation) && $userValidation->getSuccessfulLogin()) { ?>
                <p><?php echo $userValidation->getSuccessfulLogin(); ?></p>
            <?php } ?>
        </h4>
        <br><br>
    </div>
</body>

</html>