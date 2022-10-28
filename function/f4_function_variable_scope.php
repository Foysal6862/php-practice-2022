<?php
// Global
$num1 = 10;
$num2 = 20;
function sum(){
    global $num1, $num2;
    $total = $num1 + $num2;
    // return $total;
}
// echo sum();



function multiply(){
    
    $total = $GLOBALS['num1'] * $GLOBALS['num2'];
    return $total;
}
echo multiply();
?>