<?php
require_once('../POO/Errorhandling.php');
require_once('../Utils/ft_arraySize.php');

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

function arrayReverseValue(array $tab) : ?array {
    if (Errorhandling::errorArgc() === -1)
        return null;
    if (func_num_args() !== 1) {
        echo 'Wrong parameters number !' . "\n";
        return null;
    }
    foreach($tab as $item) {
        if (is_int($item) === false) {
            echo 'There is a value that isn\'t a integer !' . "\n";
            return null;
        }       
    }
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

//arrayReverseValue([1,4,8,5]);
//arrayReverseValue([10,50,34,54,7]);
//var_dump(arrayReverseValue([10,50,"string",54,7]));
//var_dump(arrayReverseValue([12,50,34,3,54,7]));
