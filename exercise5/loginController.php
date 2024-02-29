<?php
include 'loginModel.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST["uname"];
    $password = $_POST["pass"];

    $credentials = new Exercise5("erikafuerte", "123456789");

    if($username === $credentials->get_uname() && $password === $credentials->get_pass()) {
       $print = "Welcome " . $credentials->get_uname() . "!!!<br> You are successfully logged in";
       
    } elseif (empty($_POST['uname'])) {
            $error_message = "Please ensure all fields are filled in!";
        }
    elseif (empty($_POST['pass'])) {
            $error_message = "Please enter your password!";
        }
    else {
        $error_message = "Invalid username and password.";
    }
    }





