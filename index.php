<?php
include_once __DIR__ . '/functions.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Sicure</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <main class="container p-4">
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
    </main>
</body>

</html>