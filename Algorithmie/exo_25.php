<?php
require_once('../POO/Errorhandling.php');
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
    foreach ($tab as $item)
        $i++; 
    return $i;
}

function arrayReverseValue($tab = []) : array {
    Errorhandling::errorArgc();
    if (func_num_args() !== 1) {
        echo 'Wrong number of function arguments !' . "\n";
        exit(255);
    }
    Errorhandling::errorEmptyArg($tab);
    Errorhandling::errorTypeArgTabInt($tab);
    $size = arraySize($tab) - 1;
    $i = 0;
    $arrayTmp = array();
    while ($size >= 0) {
        $tab[$i] = $tab[$size];
        $size--;
        $i++;
    }
    return $arrayTmp;
}

//arrayReverseValue([1,4,8,5], [4,56,43]);
//arrayReverseValue([]);
//arrayReverseValue();
//arrayReverseValue(3);
//arrayReverseValue('str');
//arrayReverseValue([10,50,34,54,7]);
//arrayReverseValue([10,50,'str',54,7]);
//var_dump(arrayReverseValue([10,50,'string',54,7]));
//var_dump(arrayReverseValue([12,50,34,3,54,7]));
