<?php
// $rest = substr("abcdef", -1);
// $rest = substr("abcdef", -2);
// $rest = substr("abcdef", -3, 1);

// echo $rest;

// optional parameter
function functionName($name = "Jamal"){
    return $name;//Output
}

function display($anything){
    echo "<pre>";
    echo $anything;
    echo "</pre>";
}

// Calling function
display(functionName());//Input
