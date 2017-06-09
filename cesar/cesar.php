<?php
function cesar($str, $n, $flag) {
    if(!is_string($str) || !is_int($n) || !($flag == 0 || $flag == 1)) {
        echo "va t'acheter des doigts !\n";
        return -1;
    }
    $str = without($str);
    if($flag == 0) {
        $n = -$n;
    }

    $result = "";
    for($i = 0; $i < strlen($str); $i++) {
        $charcode = ord($str[$i]);
        if($charcode >= 65 && $charcode <= 90) {
            $result .= chr(my_modulo((($charcode - 65) + $n), 26) + 65);
        } else if($charcode >= 97 && $charcode <= 122) {
            $result .= chr(my_modulo((($charcode - 97) + $n), 26) + 97);
        } else {
            $result .= chr($charcode);
        }
    }
    return $result;
}

function my_modulo($int, $n) {
    $quotient = $int / $n;
    $reste = $int - ($n * floor($quotient));
    return $reste;
}

function without($str)
{
    $url = $str;
    $url = preg_replace('#Ç#', 'C', $url);
    $url = preg_replace('#ç#', 'c', $url);
    $url = preg_replace('#è|é|ê|ë#', 'e', $url);
    $url = preg_replace('#È|É|Ê|Ë#', 'E', $url);
    $url = preg_replace('#à|á|â|ã|ä|å#', 'a', $url);
    $url = preg_replace('#@|À|Á|Â|Ã|Ä|Å#', 'A', $url);
    $url = preg_replace('#ì|í|î|ï#', 'i', $url);
    $url = preg_replace('#Ì|Í|Î|Ï#', 'I', $url);
    $url = preg_replace('#ð|ò|ó|ô|õ|ö#', 'o', $url);
    $url = preg_replace('#Ò|Ó|Ô|Õ|Ö#', 'O', $url);
    $url = preg_replace('#ù|ú|û|ü#', 'u', $url);
    $url = preg_replace('#Ù|Ú|Û|Ü#', 'U', $url);
    $url = preg_replace('#ý|ÿ#', 'y', $url);
    $url = preg_replace('#Ý#', 'Y', $url);
     
    return ($url);
}
?>
