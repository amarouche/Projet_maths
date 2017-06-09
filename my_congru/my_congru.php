<?php
function my_modulo($int, $n) {
    $quotient = $int / $n;
    $reste = $int - ($n * floor($quotient));
    return $reste;
}

function my_congru($a, $b, $n) {
    if(!is_int($a) || !is_int($b) || !is_int($n)) {
        echo "va t'acheter des doigts !\n";
        return -1;
    }

    $resteA = my_modulo($a, $n);
    $resteB = my_modulo($b, $n);

    if($resteA == $resteB) {
        return 1;
    }
    return 0;
}
?>
