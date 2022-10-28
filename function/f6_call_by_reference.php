<?php

function display($anything){
    echo "<pre>";
    echo $anything;
    echo "</pre>";
}

function increment(&$i){
    $i++;
    display($i);
}
$i =10;
increment($i);
display($i);