<?php

// Ecrire une fonction qui renvoie l’inverse d’un tableau donné en paramètre, 
// par exemple si on donne [10,50,34,54] il devra renvoyer [57,34,50,10]

function ftArraySize($tab) : int {
    $i = 0;
    foreach ($tab as $element)
        $i++;
    return $i;
}

function arrayReverseValue($tab) : array {
    $size = ftArraySize($tab) - 1;
    $i = 0;
    $arrayTmp = array();
    while ($size >= 0) {
        $arrayTmp[$i] = $tab[$size];
        //echo ("i = " . $i . " | size = " . $size . " | arrayTmp[i] = " . $arrayTmp[$i] . "\n");
        $size--;
        $i++;
    }
    return $arrayTmp;
}

arrayReverseValue([10,50,34,54,7]);
//var_dump(arrayReverseValue([12,50,34,54,7]));