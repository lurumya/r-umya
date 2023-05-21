<?php
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

function getBiggerArrayValue($array) : void {
    $size = 0;
    foreach ($array as $element)
        $size++;

    $arrayTmp = $array;
    $sizeTmp = 0;
    foreach ($arrayTmp as $element) {
        if ($arrayTmp[$size] < $arrayTmp[$size - 1]) {
            $arrayTmp[$size] = 0;
        }
        echo $arrayTmp[$sizeTmp] . "\n";
        $sizeTmp++;
    }
   /* if ($arrayTmp[$size] < $arrayTmp[$size - 1]) {
        $arrayTmp[$size] = 0;
    }
        
    elseif ($arrayTmp[$size] > $arrayTmp[$size - 1]) {
        $arrayTmp[$size] = 1;
    }
    echo $arrayTmp[6] . "\n";
    echo $array[6] . "\n";

    $i = 0;*/
    /*while ($i < $size) {
        //echo $array[$i] . "\n";
        if ($arrayTmp[$i] < $arrayTmp[$i + 1]) {
             $arrayTmp[$i] = 0;
        }
        echo $arrayTmp[$i] . "\n";
        $i++;
    }*/
   //echo $array[0] . "\n";


}
//echo $element . "\n";

getBiggerArrayValue([-45,65,5,2,102,8,3]);