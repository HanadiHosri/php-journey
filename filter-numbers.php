<?php


function sortNumbers($numbers)
{
    for ($i=0; $i < count($numbers)-1; $i++) {
        for ($j=$i+1; $j < count($numbers); $j++) {
            if ($numbers[$i] > $numbers[$j]) {
                $temp = $numbers[$i];
                $numbers[$i] = $numbers[$j];
                $numbers[$j] = $temp;
            }
        }
    }
    return $numbers;
}

function filterNumbers($string)
{
    $numbers = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
    $outputNumbers = [];

    for ($i=0; $i < strlen($string); $i++) {
        if (in_array(substr($string, $i, 1), $numbers)) {
            array_push($outputNumbers, (int)(substr($string, $i, 1)));
        }
    }
    $outputNumbers = sortNumbers($outputNumbers);
    return $outputNumbers;
}

print_r(filterNumbers("hpd12aq3@8w$5"));
