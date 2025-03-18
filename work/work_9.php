<?php

function c_to_frng ($temp){
    $frg = (($temp * 9) / 5) + 32;
    return $frg;
}
print (c_to_frng (15));