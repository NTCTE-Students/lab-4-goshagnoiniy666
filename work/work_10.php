<?php

function nocopy ($array){
    $nicearr = (array_unique($array));
    return $nicearr;
}
print_r (nocopy ([1 , 2 , 2 , 3 , 14 , 14 ]));