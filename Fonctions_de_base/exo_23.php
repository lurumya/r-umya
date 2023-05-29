<?php
require_once('../POO/Errorhandling.php');
/*
=====================================================================================
Page | numéro de l'exercice : p.9 | exo 23

Description :
Ecrire une fonction qui retourne la moyenne des valeurs 
d’un tableau qui lui est donné en paramètre.

Explications :

Commentaires :

=====================================================================================
*/


function averageTabValues($array) : int {
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
    
    $i = 0;
    $average = 0;
    while ($size > $i) {
        $average = $average + $array[$i];
        $i++;
    }
    return $average / $size;
}

//averageTabValues([45,-65,5,65,555,2,102,8,3]);
//averageTabValues([45,-65,5,65,'salut',2,102,8,3]);
//averageTabValues([45,-65,5,65,555,2,102,8,3]);
//averageTabValues([]);