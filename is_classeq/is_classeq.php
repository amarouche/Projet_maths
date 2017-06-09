<?php
require "../my_congru/my_congru.php";

function  is_classeq($tab, $x, $n){
if(!is_array($tab) || !is_int($x) || !is_int($n) || $n == 0 || empty($tab))  {
        echo "va t'acheter des doigts !\n";
        return (-1);
    }
    $mod = my_modulo($x,$n);
    for ($i = 0; $i < sizeof($tab); $i++) {
         if(!is_int($tab[$i])) {
            echo "va t'acheter des doigts !\n";
            return (-1);
        }
         $mod1 = my_modulo($tab[$i],$n);
         if($mod != $mod1){
             return (0);
         }
    }
    return(1);
}
?>
