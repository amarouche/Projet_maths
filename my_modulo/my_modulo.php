<?php
function my_modulo($int, $n) {
    if(!is_int($int) || !is_int($n) || $n == 0) {
        echo "va t'acheter des doigts !\n";
        return -1;
    }

    $quotient = $int / $n;
    $reste = $int - ($n * floor($quotient));
    return $reste;
}
?>
