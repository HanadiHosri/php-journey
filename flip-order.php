<?php
function flipOrder($num) {
    if ($num < 10) {
        return $num;
    } else {
        $numlength = strlen((string)$num);
        return ($num % 10) * ((10)**($numlength-1)) + flipOrder((int)($num/10));
    }
}

echo flipOrder(1234);