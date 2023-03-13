<?php

// Funzione che a seconda del numero Int passato come parametro genera una password randomica (Strg) con i valori della variabile $characters, in un range compreso tra 0 e il valore massimo che corrisponde al numero Int passato nel parametro.
function generateRandomPassword($strg_length) {
    // Definisco caratteri possibili
    $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.,;:!$%&?";

    // Setto inizialmente la stringa vuota
    $random_password = "";

    // Ciclo per la lunghezza della stringa passata nel parametro
    for ($i = 0; $i < $strg_length; $i++) {
        // Recupero un indice di $characters
        $index = rand(0, strlen($characters) - 1);

        // Aggiungo alla stringa il carattere posizionato in quell' $index
        $random_password .= $characters[$index];
    }

    // Ritorno la stringa generata
    return $random_password;
} 

?>