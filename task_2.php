<?php

$numbers = [1,2,3,4,5,6,7,8,9,10];
function removeEvenNumbers($arr) {
    $oddNumbers = array();

    foreach ($arr as $number) {
        if ($number % 2 !== 0) {
            $oddNumbers[] = $number;
        }
    }
    print_r($oddNumbers);
}

removeEvenNumbers($numbers);

?>