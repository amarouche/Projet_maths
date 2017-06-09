<?php
function inv_modulo($a, $n) {
    if(gettype($a) != "integer" || gettype($n) != "integer" || $n <= 0) {
        echo "va t'acheter des doigts !\n";
        return 0;
    }
    $u = 1;
    while($u < $n) {
        if(my_modulo($a * $u, $n) == 1) {
            return $u;
        }
        $u++;
    }
    echo "va t'acheter des doigts !\n";
    return 0;
}

function my_modulo($int, $n) {
    $quotient = $int / $n;
    $reste = $int - ($n * floor($quotient));
    return $reste;
}
?>
