<?php
function validateIpv4($ip) {
    $numbers = [];
    $dots = [];
    $currentNum = "";
    for($i = 0; $i < strlen($ip); $i++) {
        if (substr($ip, $i, 1) == "." && substr($ip, $i+1, 1) == ".") {
            return "not a valid IPv4";
        }
        if (substr($ip, $i, 1) == ".") {
            array_push($dots, ".");
        }
        if (is_numeric(substr($ip, $i, 1))) {
            $currentNum = $currentNum . substr($ip, $i, 1);
        } elseif (substr($ip, $i, 1) == ".") {
            array_push($numbers, $currentNum);
            $currentNum = "";
        }
    }
    array_push($numbers, $currentNum);
    if (count($dots) != 3) {
        return "not a valid IPv4";
    }
    if (count($numbers) != 4) {
        return "not a valid IPv4";
    } else {
        for ($i = 0; $i < 4; $i++) {
            if ((int)$numbers[$i] < 0 || (int)$numbers[$i] > 255) {
                return "not a valid IPv4";
            }
        }
        return "valid IPv4";
    }

}

echo validateIpv4("100.2.300.3");