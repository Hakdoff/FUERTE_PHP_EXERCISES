<?php 

class Exercise5 {
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