<?php

function advanced_cesar($str, $n, $alpha, $flag) {
    if(!is_string($alpha) || !is_string($str) || !is_int($n) || !($flag == 0 || $flag == 1)) {
        echo "va t'acheter des doigts !\n";
        return -1;
    }
    $str = without($str);
    if($flag == 0) {
        $n = -$n;
    }
    $result = "";
    $mode = strlen($alpha);
    for($i = 0; $i < strlen($str); $i++) {
        $pos = getCharPosition($str[$i], $alpha);
        if(!is_int($pos)) {
            $result .= $str[$i];
        } else {
            $newPos = my_modulo(($pos + $n), $mode);
            $newChar = $alpha[$newPos];
            if(ctype_upper($str[$i])) {
                $result .= strtoupper($newChar);
            } else {
                $result .= strtolower($newChar);
            }
        }
    }
    return ($result);
}

advanced_cesar("ceci est un test", 1, "bzdpxcofnhwmglvkjitsdyerqua", 1);

function getCharPosition($char, $alpha) {
    if(ctype_upper($char)) {
        $alpha = strtoupper($alpha);
    } else {
        $alpha = strtolower($alpha);
    }
    return strpos($alpha, $char);
}

function without($str) {
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

function my_modulo($int, $n) {
    if(!is_int($int) || !is_int($n) || $n == 0) {
        echo "va t'acheter des doigts !\n";
        return -1;
    }

    $quotient = $int / $n;
    $reste = $int - ($n * floor($quotient));
    return intval($reste);
}

?>