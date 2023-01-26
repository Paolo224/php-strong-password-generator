<?php

function getRandomPassword($lunghezza)
{
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789.!?,;:#*';
    $counter = '';
    for ($i = 0; $i < $lunghezza; $i++) {
        $counter .= $caratteri[rand(0, strlen($caratteri) - 1)];
    }
    return $counter;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Sicure</title>
</head>

<body>
    <form action="./index.php" method="GET">
        <input type="text" name="password">
        <button type="submit">Genera Password</button>
    </form>

    <h2>
        <?php
        $password = $_GET['password'];
        echo getRandomPassword($password)
        ?>
    </h2>

</body>

</html>