<?php

namespace src\Controller;

use src\Model\ValidationModel;

class ValidationController
{

    private $errorMessage;
    private $successfulLoginMessage;

    public function validation()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $username = $_POST["uname"];
            $password = $_POST["pass"];
            $credentials = new ValidationModel("erikafuerte", "123456789");

            if ($this->validateCredentials($username, $password, $credentials)) {
                $this->successfulLoginMessage = "Welcome " . $credentials->getUsername() . "!!!<br> You are successfully logged in";
            } else {
                $this->errorMessage = "Invalid username and password.";
            }
        }
    }

    private function validateCredentials($username, $password, $credentials)
    {
        return $username === $credentials->getUsername() && $password === $credentials->getPassword();
    }

    public function emptyUsername()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (empty($_POST['uname'])) {
                $this->errorMessage = "Please ensure all fields are filled in!";
            }
        }
    }

    public function emptyPassword()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (empty($_POST['pass'])) {
                $this->errorMessage = "Please enter your password!";
            }
        }
    }

    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    public function getSuccessfulLogin()
    {
        return $this->successfulLoginMessage;
    }
}
