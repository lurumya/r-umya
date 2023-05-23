<?php
/*
=====================================================================================
Page | numéro de l'exercice : p.10 | exo 25

Description :
Ecrire une fonction qui renvoie l’inverse d’un tableau donné en paramètre, 
par exemple si on donne [10,50,34,54] il devra renvoyer [57,34,50,10]

Explications :

Commentaires :

=====================================================================================
*/

function arraySize($tab) : int {
    $i = 0;
    foreach ($tab as $element)
        $i++;
    return $i;
}

function arrayReverseValue($tab) : array {
    $size = arraySize($tab) - 1;
    $i = 0;
    $arrayTmp = array();
    while ($size >= 0) {
        $arrayTmp[$i] = $tab[$size];
        $size--;
        $i++;
    }
    return $arrayTmp;
}

// arrayReverseValue([10,50,34,54,7]);
//var_dump(arrayReverseValue([12,50,34,3,54,7]));