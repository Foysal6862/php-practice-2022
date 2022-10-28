<?php

function sum(...$numbers){
    // $numbers = func_get_args();
    $total = 0;
    for ($i = 0; $i < count($numbers); $i++){
        $total += $numbers[$i];
    }
    return $total;
}

echo sum(10,20,30)."<br />";
echo sum(10,20,30, 100)."<br />";