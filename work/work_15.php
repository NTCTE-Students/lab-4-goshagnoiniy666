<?php
function secondLargest($arr) {
    sort($arr);
    return $arr[count($arr) - 2];
}
print (secondLargest([1 , 2 , 3 , 14 , 99]));