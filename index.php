<?php

// Includo file della funzione
include_once(__DIR__ . "./_partials/functions.php");

// Creo variabile che corrisponde al valore passato dall'utente, se esiste, altrimenti la setto vuota
$strg_length = $_GET["password-length"] ?? "";

// Se ho ricevuto i dati
if(!empty($_GET)) {
    // Salvo in una variabile il risultato della funzione
    $is_password_generate = generateRandomPassword($strg_length);

    // Se la password è stat generata
    if($is_password_generate) {
        // Avvio la sessione
        session_start();

        // Salvo la password generata nella sessione
        $_SESSION["result_password"] = $is_password_generate;

        // Reindirizzo ad un'altra pagina
        header("Location: ./_partials/successful.php");
    }
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
            </div>
        </div>
    </div>
</body>

</html>