<?php 

namespace src\Controller;

use src\Model\ContactModel;

class ContactController
{
    
    private $error_message;
    private $userdetails;

    public function contactValidation()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") 
        {
            $conName = $_POST['name'];
            $conEmail = $_POST['email'];
            $conMessage = $_POST['message'];

            $details = new ContactModel($_POST['name'], $_POST['email'], $_POST['message']);
            $details->getName();
            $details->getEmail();
            $getMessage = $details->getMessage();

            if(empty($_POST['name']) && empty($_POST['email']) && empty($_POST['message'])){
            $this->error_message = "Please ensure all fields are filled in!";
            }
            elseif (empty($_POST['name'])) {
            $this->error_message = "Please enter your name!";
            }
            elseif (empty($_POST['email'])) {
            $this->error_message = "Please enter your email!";
            }
            elseif (empty($_POST['message'])) {
            $this->error_message = "Please enter your message!";
            } 
            else 
            {
            $this->userdetails = "Name: " . $details->getName() . "<br><br>". 
            "Email: " . $details->getEmail() . "<br><br>" .  
            "Message: " . $details->getMessage();  
            }
        }
    }

    public function getErrorMessage()
    {
        return $this->error_message;
    }
    
    public function getDetails()
    {
        return $this->userdetails;
    }
}
