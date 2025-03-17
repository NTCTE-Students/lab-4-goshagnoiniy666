<?php

function randompass ($length){
    $letters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $password = "";
    for ($i = 0; $i < $length; $i++) {
    for ($j = 0; $j < $length; $j++) {
        $password .= $letters[rand(0, strlen($letters) -1)];
        }

    }
    return $password;
}
print (randompass (5));