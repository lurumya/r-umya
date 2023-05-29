<?php
require_once('../POO/Errorhandling.php');
/*
=====================================================================================
Page | numéro de l'exercice : p.9 | exo 22

Description :
Ecrire une fonction qui retourne la plus grande valeur 
d’un tableau qui lui est donné en paramètre.

Explications :

Commentaires :

=====================================================================================
*/

function getBiggerArrayValue($array) : int {
    Errorhandling::errorArgc();
    if (func_num_args() !== 1) {
        echo 'Wrong number of function arguments !' . "\n";
        exit(255);
    }
    Errorhandling::errorEmptyArg($array);
    Errorhandling::errorTypeArgTabInt($array);
    $size = 0;
    foreach ($array as $element)
        $size++;

    $arrayTmp = $array;
    $sizeTmp = 0;
    $j = 0;
    while (($size - 1) > $sizeTmp) {
        if ($arrayTmp[$sizeTmp] > $arrayTmp[$sizeTmp + 1]) {
            $j++;
        }
        if ($arrayTmp[$sizeTmp] > $arrayTmp[$sizeTmp + 1]) {
            $tmp = $arrayTmp[$sizeTmp];
            $tmp1 = $arrayTmp[$sizeTmp + 1];
            $arrayTmp[$sizeTmp] = $tmp1;
            $arrayTmp[$sizeTmp + 1] = $tmp;
        }
        if ($j > 0) {
            $sizeTmp = 0;
            $j = 0;
        }
        else
            $sizeTmp++;
    }
    return $arrayTmp[$size - 1];
}

//echo getBiggerArrayValue([45,-65,5,555,2,102,8,3]) . "\n";
//getBiggerArrayValue([45,-65,"str",555,2,102,8,3]);
//getBiggerArrayValue([45,-65,5,555,2,102,8,3]);
//getBiggerArrayValue([45,-65,"str",555,2,102,8,3]);
//getBiggerArrayValue([]);