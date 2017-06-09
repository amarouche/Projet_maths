<?php
function my_modulo_neg($int, $n) {
    if(!is_int($int) || !is_int($n) || $n >= 0) {
        echo "va t'acheter des doigts !\n";
        return $int;
    }
    $quotient = $int / $n;
    $reste = $int - ($n * floor($quotient));
     if($reste < 0)
         {
              $reste = $reste - $n;
         }
    return $reste;
}
?>
