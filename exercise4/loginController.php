<?php
include 'loginModel.php';



if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST["uname"];
    $password = $_POST["pass"];

    $credentials = new Exercise4("erikafuerte", "123456789");

    if($username === $credentials->get_uname() && $password === $credentials->get_pass()) {
       $print = "Welcome " . $credentials->get_uname() . "!!!<br> You are successfully logged in";
    } else {
        $error_message = "Invalid username and password.";
    }
}

