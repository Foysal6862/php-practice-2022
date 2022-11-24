<?php
print_r($_GET);
$name = $_GET['name'] ?? "";
$email = $_POST['email'] ?? "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 3</title>
</head>

<body>
    <dl>
        <dt>Name:</dt>
        <dd><?= $name ?></dd>
        <dt>Email:</dt>
        <dd><?= $email ?></dd>
    </dl>
    <a href="page1.php?name=<?=$name?>">Go</a> to page1
</body>

</html>