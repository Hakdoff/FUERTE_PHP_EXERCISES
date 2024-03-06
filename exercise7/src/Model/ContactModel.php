<?php 

namespace src\Model;

class ContactModel 
{
    
    public $name;
    public $email;
    public $message;

    public function __construct($name, $email, $message) 
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    public function getName(): string 
    {
        return $this->name;
    }
        
    public function getEmail(): string 
    {
        return $this->email;
    }

    public function getMessage(): string 
    {
        return $this->message;
    }
}
