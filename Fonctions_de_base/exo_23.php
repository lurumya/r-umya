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

function averageTabValues(array $array = []) : int {
    Errorhandling::errorArgc();
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

//echo averageTabValues([45,-65,5,65,555,2,102,8,3]);
//averageTabValues([]);
//averageTabValues('');
//averageTabValues('str');
//averageTabValues(5);
//averageTabValues();
//averageTabValues([45,-65,5,65,555,2,102,8,3], [2,3,4]);
//averageTabValues([45,-65,5,65,'salut',2,102,8,3]);
//averageTabValues([45,-65,5,65,555,2,102,8,3]);
