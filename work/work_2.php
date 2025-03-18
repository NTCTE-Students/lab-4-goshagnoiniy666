<?php

function palindromich ($string) {
    $cleanstring = strtolower(str_replace("","", $string));
    $reverstring = strrev($cleanstring);
    if ($cleanstring == $reverstring){
        return "Палиндром";
    } else {
        return ("Не палиндром");

}
}
print palindromich("bob"); 
print palindromich("cheshuya"); 
