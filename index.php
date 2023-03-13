<?php

if(!empty($_GET)) {
    $strg_length = $_GET["password-length"];
} else {
    $strg_length = 0;
}


function generateRandomPassword($strg_length) {
    $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.,;:!$%&?";
    $random_password = "";

    for ($i = 0; $i < $strg_length; $i++) {
        $character = rand(0, strlen($characters) - 1);
        $random_password .= $characters[$character];
    }
    return $random_password;
} 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <div class="container my-3">
        <h1>Generatore di password randomica</h1>
        <div class="card">
            <div class="card-header">
                Inserisci la lunghezza della password
            </div>
            <div class="card-body">
                <form method="GET" class="mb-3">
                    <div class="input-group my-3">
                        <input type="number" class="form-control" name="password-length" id="password-length"
                            aria-describedby="basic-addon3" min="0" value="<?=$strg_length?>">
                    </div>
                    <button class="btn btn-primary">Genera</button>
                </form>
                <div class="result">
                    <h2>La password generata è:</h2>
                    <p> <?= generateRandomPassword($strg_length) ?> </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>