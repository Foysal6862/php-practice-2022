<?php
$name = $_POST['fullName'] ?? "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>

<body>
    <form action="page3.php?name=<?=$name?>" method="post">
        <fieldset>
            <legend>Working with QueryString</legend>
            <label for="">Enter Your Email</label>
            <input type="email" name="email">
            <button type="submit">Submit</button>
        </fieldset>
    </form>
</body>

</html>