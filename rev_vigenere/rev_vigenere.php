<?php
function rev_vigenere($str, $key) {
    if(!is_string($str) || !is_string($key) || empty($str) || empty($key)) {
        echo "va t'acheter des doigts !\n";
        return -1;
    }
    $str = without($str);
    $str2 = "";
    for($j = strlen($key) - 1, $i = 0; $i < strlen($str); $i++) {
        if(preg_match("/[a-z]$/i", $str[$i])) {
            $str2 .= changeChar($str[$i], $key[$j]);
            $j--;
        } else {
            $str2 .= $str[$i];
        }
        if($j == 0) {
            $j = strlen($key) - 1;
        }
    }
    return($str2);
}

function changeChar($a, $b) {
    $alpha = "abcdefghijklmnopqrstuvwxyz";
    $keynbr = strpos($alpha, strtolower($b));
    if(ctype_upper($a)) {
        $alpha = strtoupper($alpha);
    }
    $charNbr = strpos($alpha, $a) + $keynbr;
    $newNbr = my_modulo($charNbr, 26);
    $newChar = $alpha[$newNbr];
    return ($newChar);
}

function my_modulo($int, $n) {
    if(!is_int($int) || !is_int($n) || $n == 0) {
        echo "va t'acheter des doigts !\n";
        return -1;
    }

    $quotient = $int / $n;
    $reste = $int - ($n * floor($quotient));
    return intval($reste);
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