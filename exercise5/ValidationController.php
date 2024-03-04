<?php
include 'ValidationModel.php';

class UserValidation {
    private $error_message;
    private $sucLogin;

    public function validation()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") 
        {
            $username = $_POST["uname"];
            $password = $_POST["pass"];

            $credentials = new Validation("erikafuerte", "123456789");

            if($username === $credentials->getUsername() && $password === $credentials->getPassword()) 
            {
                $this->sucLogin = "Welcome " . $credentials->getUsername() . "!!!<br> You are successfully logged in";
            } elseif (empty($_POST['uname'])) {
                $this->error_message = "Please ensure all fields are filled in!";
            } elseif (empty($_POST['pass'])) {
                $this->error_message = "Please enter your password!";
            } else {
                $this->error_message = "Invalid username and password.";
            }
        }
    }
    
    public function getErrorMessage()
    {
        return $this->error_message;
    }

    public function getSuccessfulLogin()
    {
        return $this->sucLogin;
    }
}
