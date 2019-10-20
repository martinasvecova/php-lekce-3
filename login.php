<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Úkol 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">
    <form method="POST">
        <div class="form-group">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Login:</label>
                <input class="form-control" type="text" name="login" placeholder="Login">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password:</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password"> <br>

            <button type="submit" class="btn btn-primary mb-2">Přihlásit</button>
        </div>
    </form>


    <?php

    if (!empty($_POST['login']) && !empty($_POST['password'])) {

        if ($_POST['login'] == 'admin' &&
            $_POST['password'] == 'top-secret') {
            $_SESSION['loggedIn'] = true;
            $_SESSION['login'] = $_POST['login'];
            $_SESSION ['data'] =
                    ['Datum registrace: ' => '2. 4. 2018',
                    'Souhlas s podmínkami: ' => 'ANO',
                    'Počet objednávek: ' => 23];

            echo '<a href="admin.php">Pokračovat do administrace</a>';
        } else {
            echo 'Chybné jméno nebo heslo';
            unset($_SESSION['loggedIn']);
        }
    }

    ?>


</div>
</body>
</html>
