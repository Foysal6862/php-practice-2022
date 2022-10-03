<?php
    // if , else, else if
    $is_cng_available = true;
    $has_cng_fare = false;

    // if($is_cng_available && $has_cng_fare){
    //     echo "Let's go by CNG";
    // }else{
    //     echo "Let's Walk";
    // }

    // ternary operator
    echo ($is_cng_available && $has_cng_fare)?"Let's go by CNG":"Let's Walk";

    echo "<br>";
    // switch
	$x = 2;
	switch ($x) {
		case 1:
			printf("Choice is 1");
			break;
		case 2:
			printf("Choice is 2");
			break;
		case 3:
			printf("Choice is 3");
			break;
		default:
			printf("Choice other than 1, 2 and 3");
			break;
	}


?>