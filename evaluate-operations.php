<?php
function evaluateOperation($operation)
{
    $numbers = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
    $operations = ["+", "-", "*", "/"];
    $number1s = "";
    $number2s = "";
    $op = "";

    for ($i=0; $i < strlen($operation); $i++) {
        if (in_array(substr($operation, $i, 1), $numbers)) {
            if ($op == "") {
                $number1s = $number1s . substr($operation, $i, 1);
            } else {
                $number2s = $number2s . substr($operation, $i, 1);
            }
        } else {
            $op = $op . substr($operation, $i, 1);
        }
    }

    $number1 = (int)$number1s;
    $number2 = (int)$number2s;

    switch ($op) {
        case "+" :
            return $number1 + $number2;
            break;
        case "-" :
            return $number1 - $number2;
            break;
        case "*" :
            return $number1 * $number2;
            break;
        case "/" :
            return $number1 / $number2;
            break;
        default:
            echo "this is not a valid operation";
    }
    
}

echo evaluateOperation("10+20");