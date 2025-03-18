<?php

function nmbr_of_words ($string){
    $words = preg_split('/\s+/', $string, -1, PREG_SPLIT_NO_EMPTY);
    return count($words);
}
$string = "Привет, каменоломня  сорокпять";
echo nmbr_of_words($string); 