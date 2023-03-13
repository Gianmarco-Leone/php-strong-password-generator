<?php

// Avvio sessione
session_start();

// Recupero valore salvato nella sessione
$is_password_generate = $_SESSION["result_password"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generata</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container my-3">
        <div class="card">
            <div class="card-header">
                Password generata
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $is_password_generate ?> </h5>
                <a href="../index.php" class="btn btn-primary">Torna al generatore</a>
            </div>
        </div>
    </div>

</body>

</html>