<?php

function summnumbers ($number){
    $sum = 0;
    while ($number > 0) {
        $sum += $number %10;
        $number = floor($number / 10);
}
    return $sum;
}
print (summnumbers (123));