<?php
require_once('../POO/Errorhandling.php');
/*
=====================================================================================
Page | numéro de l'exercice : p.10 | exo 27

Description :

Explications :
Ecrire une fonction qui renvoie la moyenne de tous 
les éléments d’un tableau, par exemple [1,50,34,99,547,3]

Commentaires :

=====================================================================================
*/

function averageArrayValue($tab = []) : int {
    Errorhandling::errorArgc();
    if (func_num_args() !== 1) {
        echo 'Wrong number of function arguments !' . "\n";
        exit(255);
    }
    Errorhandling::errorEmptyArg($tab);
    Errorhandling::errorTypeArgTabInt($tab);
    $average = 0;
    $i = 0;
    foreach ($tab as $element) {
        $average = $average + $element;
        $i++;
    }
    return $average;
}

//averageArrayValue([]);
//averageArrayValue();
//averageArrayValue(6);
//averageArrayValue([1,50,'string',99,547,3]);
//averageArrayValue([1,50,99,547,3], [654,34,2,1]);
//averageArrayValue([1,50,99,547,3]);
// var_dump(averageArrayValue([1,50,34,99,547,3]));