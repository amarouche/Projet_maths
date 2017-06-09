<?php
require "../is_classeq/is_classeq.php";

function n_classeq($tab, $x)
{
    if ($x < 0 || !is_array($tab) || empty($tab) || !is_int($x))
    {
         echo ("va t'acheter des doigts !\n");
        return (-1);
    }
        foreach ($tab as $value) {
            if (!is_int($value) || $value < 0)
            {
                echo ("va t'acheter des doigts !\n");
                return (-1);
            }
        }
        $n = 2;
        for ($i = 0; $i <= max($tab); $i++) {
            if (is_classeq($tab, $x, $n) == 1)
              return ($n);
             $n++;
        }
        return (0);
}
?>
