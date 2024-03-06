<?php use src\Controller\ContactController; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ContactStyle.css">
</head>
<body>
<div class="contact">
    <h1>Contact Form</h1>
    <?php 
    $contactForm = new ContactController();
    $contactForm->contactValidation();
    ?>
<div class="row">
    <div class="column">
        <div class="red">
        <p><?php if(isset($contactForm) && $contactForm->getErrorMessage()) { ?>
        <?php echo $contactForm->getErrorMessage(); ?>
        <?php } ?><p>
        </div>
    <form action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name"/> <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email"/><br><br>
        <label for="message">Message:</label>
        <textarea type="text" name="message" id="message"></textarea><br>
        <button class="submit" type="submit" name="submit" value="Submit">Submit </button>      
        <br><br><br><br><br><br><br><br>
        <h4><?php if(isset($contactForm) && $contactForm->getDetails()) { ?>
        <?php echo $contactForm->getDetails(); ?>
        <?php } ?></h4>   
        <br><br><br><br><br><br><br>
    </div>
    </form>
</div>
</body>
</html>
