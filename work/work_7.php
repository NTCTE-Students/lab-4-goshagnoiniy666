<?php

function lenghtstr ($string){
    $length = 0;
    while (isset($string[$length])) {
        $length++;
}
    return $length;
}
print (lenghtstr("Ребята прекратите"));