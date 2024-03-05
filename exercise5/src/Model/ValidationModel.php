<?php 

namespace src\Model;

class ValidationModel 
{
	
	public function __construct($uname, $pass) 
	{
    	$this->uname = $uname;
    	$this->pass = $pass;
	}
	
	public function getUsername(): string 
	{
    	return $this->uname;
	}

	public function getPassword(): string
	{    
    	return $this->pass;
	}
}
