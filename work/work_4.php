<?php

function arrup ($arr) {
    sort($arr);
    return $arr;
}
print_r (arrup ([1 , 14 , 3]));