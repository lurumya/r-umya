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

function getBiggerArrayValueEasy(?array $array = []) : int {
    Errorhandling::errorArgc();
    return (max($array));
}
//var_dump(getBiggerArrayValueEasy([45,-65,5,555,2,102,8,3]));

// J'ai un honte, surtout arpès avoir dit que cet exo était facile.
// La première version que j'ai faite était effectivement fonctionnelle.
// Arnaud m'a suggéré de sauvegarder la valeur dans une variable uniquement 
// si elle est supérieure au maximum que tu as déjà trouvé".
// J'ai bien galéré un moment et ensuite j'ai demandé de l'aide...
// Un peu frustrant de pas avoir pensé à ça...
function getBiggerArrayValueHard(array $array = []): int {
    Errorhandling::errorArgc();
    $size = count($array);
    $i = 0;
    $bigestInt = 0;
    while ($i < $size) {
        if ($array[$i] > $bigestInt)
            $bigestInt = $array[$i];
        $i++;
    }
    return $bigestInt;
}

//getBiggerArrayValueHard([43534563,-200,45,-65,5,555,2,102,8343]);
//echo getBiggerArrayValueHard([43534563,-200,45,-65,5,555,2,102,8343]) . "\n";







/*
function getBiggerArrayValueHard(array $array = []) : int {
    //Errorhandling::errorArgc();
    $size = count($array);
    $i = 0;
    $bigestInt = 0;
    while ($i < $size && ($i + 1 < $size)) {

        if ($array[$i] < $array[$i + 1]) {
            $bigestInt = $array[$i + 1];
        }
        if ($array[$i] > $array[$i + 1]) {
            $bigestInt = $array[$i];
        }
        $i++;
    }
    return $bigestInt ;
}
getBiggerArrayValueHard([-200,45,-65,5,555,2,102,8,3]);
*/


/*
function getBiggerArrayValueHard(array $array = []) : int {
    Errorhandling::errorArgc();
    //$size = -1;
    //foreach ($array as $element) {
    //    $size++;
    //}
    $size = count($array);

    $i = 0;
    $bigestInt = 0;
    while ($i < $size && ($i + 1 < $size)) {

        if ($array[$i] < $array[$i + 1]) {
            $bigestInt = $array[$i + 1];
            $array[$i] = 0;
            //echo 'AA - $array[$i] = ' . $array[$i] . ' | ' . '$i = ' . $i . ' | ' . '$bigestInt = ' . $bigestInt . "\n";
            //echo 'AAA - $bigestInt = ' . $bigestInt . '|'. '$tmp = ' . $tmp . "\n";
        }
        if ($array[$i] > $array[$i + 1]) {
            $bigestInt = $array[$i];
            //echo 'BB - $array[$i] = ' . $array[$i] . ' | ' . '$i = ' . $i . ' | ' . '$bigestInt = ' . $bigestInt . "\n";
            //echo 'AAA - $bigestInt = ' . $bigestInt . '|'. '$tmp = ' . $tmp . "\n";
        }

        $i++;

    }
    //echo 'CCC - $biggerInt = ' . $bigestInt . "\n\n";
    return $bigestInt ;
}
echo getBiggerArrayValueHard([-200,45,-65,5,555,2,102,8,3]) . "\n\n";
//var_dump(getBiggerArrayValueHard([-200,45,-65,5,555,2,102,8,3]));
*/

/*
function getBiggerArrayValueHard(array $array = []) : array {
    Errorhandling::errorArgc();
    $size = -1;
    foreach ($array as $element) {
        $size++;
    }
    $i = 0;
    $biggerInt = 0;
    while ($i < $size && ($i + 1 <= $size)) {
        $tmp = 0;
        if ($array[$i] < $array[$i + 1]) {
            $array[$i] = 0;
            $biggerInt = $array[$i + 1];
            echo '$array[$i] = ' . $array[$i] . '|' . '$i = ' . $i . "\n";
        }
        $i++;
    }
    echo '$biggerInt = ' .$biggerInt . "\n";
    return $array;
}
//echo getBiggerArrayValueHard([-200,45,-65,5,555,2,102,8,3]) . "\n\n";
var_dump(getBiggerArrayValueHard([-200, 45,-65,5,555,2,102,8,3]));
*/

/**
 * C'est fonctionnel en effet, cependant je pense que ca peut être simplifié
 * je pense que tu peux te contenter de parcourir ton tableau comme tu le fais déjà, et sauvegarder la valeur dans une variable uniquement si elle est supérieure au maximum que tu as déjà trouvé
 * en bonus tu pourras aussi faire ce même exo avec les fonctions php de base
 */

 /*
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
*/


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