<?php
$arg2 = 0;

function getRandomPassword($arg1)
{
    for ($i = 0; $i < $arg1; $i++) {
        // $arg2 .= chr(64 + rand(1, 26));
    }
    // return $arg2;
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