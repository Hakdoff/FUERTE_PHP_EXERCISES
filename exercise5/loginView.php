<?php include 'loginController.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
     <div class="login"><br>
    <h1>Login</h1>
    <div class="red"> 
        <?php if(isset($error_message)) { ?>
            <p><?php echo $error_message; ?></p> 
            <?php } ?>
  
    </div>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <label for="uname">Username:</label>
            <input type="text" name="uname" id="uname"></input>
  
            <br><br>
            <label for="pass">Password:</label>
            <input type="password" name="pass" id="pass" ></input>
        
<br><br>
            <button class="submit" type="submit" name="login" >Login</button>
        </form>

     <h4> <?php if(isset($print)) { ?>
            <p><?php echo $print; ?></p> 
            <?php } ?></h4>
    </div>
</body>
</html>