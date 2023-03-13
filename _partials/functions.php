<?php

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