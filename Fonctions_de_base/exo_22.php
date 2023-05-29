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


/**
 * C'est fonctionnel en effet, cependant je pense que ca peut être simplifié
 * je pense que tu peux te contenter de parcourir ton tableau comme tu le fais déjà, et sauvegarder la valeur dans une variable uniquement si elle est supérieure au maximum que tu as déjà trouvé
 * en bonus tu pourras aussi faire ce même exo avec les fonctions php de base
 */
function getBiggerArrayValue($array = []) : int {
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

//getBiggerArrayValue([45,-65,5,555,2,102,8,3]);
//getBiggerArrayValue([]);
//getBiggerArrayValue('');
//getBiggerArrayValue([45,-65,5,555,2,102,8,3], [4,5,6]);
//getBiggerArrayValue([45,-65,5,555,2,102,8,3], 6);
//getBiggerArrayValue();
//getBiggerArrayValue(5);
//getBiggerArrayValue([45,-65,5,555,'str',102,8,3]);
//getBiggerArrayValue('str');

//echo getBiggerArrayValue([45,-65,5,555,2,102,8,3]) . "\n";
//getBiggerArrayValue([45,-65,"str",555,2,102,8,3]);
//getBiggerArrayValue([45,-65,5,555,2,102,8,3]);
//getBiggerArrayValue([45,-65,"str",555,2,102,8,3]);
//getBiggerArrayValue([]);