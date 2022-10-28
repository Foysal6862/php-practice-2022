<?php

$str = "to do or not to do";
$pattern = "/do|to/i";
echo preg_match_all($pattern, $str, $matches);
print_r($matches);  