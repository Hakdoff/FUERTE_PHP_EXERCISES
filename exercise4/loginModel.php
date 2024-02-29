<?php 

// $uname = "erikafuerte";
// $pass = "123456789";

class Exercise4 {
    public function __construct($uname, $pass) {
        $this->uname = $uname;
         $this->pass = $pass;
    }
      public function get_uname() {
        return $this->uname;
    }
      public function get_pass() {
        
        return $this->pass;
    }
}