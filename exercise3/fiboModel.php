<?php 
include 'fiboController.php';
if(isset($_POST['num'])){
$num1 = $_POST['num'];  

$num1 = new Exercise3($_POST['num'],0, 1);


echo "Fibonacci Series for " . $num1->get_num() . ": ";
echo  $num1->get_fnum() . ", ";
echo  $num1->get_snum() . ", ";
$num1->fibonacci();
}