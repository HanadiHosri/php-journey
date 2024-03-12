<?php
function validateIpv4 ($ip) {
    $numbers = [];
    $dots = [];
    $currentNum = "";
    for($i = 0; $i < strlen($ip); $i++) {
        if (substr($ip, $i, 1) == "." && substr($ip, $i+1, 1) == ".") {
            echo "not a valid IPv4";
            break;
        }
        if (substr($ip, $i, 1) == ".") {
            array_push($dots, ".");
        }
        if (is_numeric(substr($ipn, $i, 1))) {
            $currentNum += substr($ip, $i, 1);
        } elseif (substr($ipn, $i, 1) == ".") {
            array_push($numbers, $currentNum);
            $currentNum = "";
        }
    }
    if (count($dots) != 3) {
        echo "not a valid IPv4";
    }
    if (count($numbers) != 4) {
        echo "not a valid IPv4";
    } 
}