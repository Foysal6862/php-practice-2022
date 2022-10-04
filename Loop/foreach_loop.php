<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach loop</title>
</head>
<body>
<?php 

// Index array
$fruits = ["Apple", "Banana", "Mango", "Grape"];

// Associative array
// $fruits = [
//     "fruit1"=>"Apple",
//     "fruit2"=>"Banana",
//     "fruit"=>"Mango",
//     "fruit4"=>"Orange"
// ];



// $totalItems = count($fruits);
// for ($i=0; $i < $totalItems; $i++) { 
//     echo $fruits[$i];
//     echo "<hr>";
// }

foreach ($fruits as $key=> $fruit) {
    if ($fruit == "Mango") {
        break;
    }
    echo $key. ": ".$fruit;
    echo "<hr>";
}

$a = array(1,2,3,5,8,13,21,34,55);
$sum =0;
for ($i=0; $i < 5; $i++) { 
    $sum+=$a[$a[$i]];
}
echo $sum;

?>
</body>
</html>