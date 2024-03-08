<?php

namespace src\Controller;

use src\Model\ContactModel;

class ContactController
{
    private $errorMessage;
    private $userDetails;

    public function contactValidation()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $_POST['name'];
            $_POST['email'];
            $_POST['message'];

            $details = new ContactModel($_POST['name'], $_POST['email'], $_POST['message']);
            $details->getName();
            $details->getEmail();
            $details->getMessage();

            if (empty($_POST['name']) && empty($_POST['email']) && empty($_POST['message'])) {
                $this->errorMessage = "Please ensure all fields are filled in!";
            } else {
                $this->userDetails = "Name: " . $details->getName() . "<br><br>" .
                    "Email: " . $details->getEmail() . "<br><br>" .
                    "Message: " . $details->getMessage();
            }
        }
    }

    public function emptyName()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (empty($_POST['name'])) {
                $this->errorMessage = "Please enter your name!";
            }
        }
    }

    public function emptyEmail()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (empty($_POST['email'])) {
                $this->errorMessage = "Please enter your email!";
            }
        }
    }

    public function emptyMessage()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (empty($_POST['message'])) {
                $this->errorMessage = "Please enter your message!";
            }
        }
    }

    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    public function getDetails()
    {
        return $this->userDetails;
    }
}
