 
 <?php 
  
   
    class Exercise3 {
        public  function __construct($num,$fnum, $snum) {
            $this->num = $num;
             $this->fnum = $fnum;
               $this->snum =  $snum ;
        }

        public function get_num(){
            return  $this->num;
        }

         public function get_fnum(){
            return   $this->fnum ;
        }

         public function get_snum(){
            return  $this->snum;
        }
    
        public function fibonacci() {
        for ($i = 2; $i < $this->num; $i++) {  
            $next_num = $this->fnum + $this->snum;  
            $this->fnum = $this->snum;
            $this->snum = $next_num;
            echo $next_num . ", ";
        }
    }
        }