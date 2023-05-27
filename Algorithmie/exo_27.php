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

function averageArrayValue(array $tab) : ?int {
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
    $average = 0;
    $i = 0;
    foreach ($tab as $element) {
        $average = $average + $element;
        $i++;
    }
    return $average;
}

//averageArrayValue([1,50,"string",99,547,3]);
// var_dump(averageArrayValue([1,50,34,99,547,3]));