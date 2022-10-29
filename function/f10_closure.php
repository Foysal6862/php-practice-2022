<?php

$designation = "Engineer";

$greet = function ($name)use($designation)
{
    return $designation." ".$name;
};//function expression

echo $greet('Foysal Ahmed');
?>