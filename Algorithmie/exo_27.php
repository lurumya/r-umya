<?php
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

function ftAverageTableValue($tab) : int {
    $average = 0;
    $i = 0;
    foreach ($tab as $element) {
        $average = $average + $element;
        $i++;
    }
    return $average;
}

// ftAverageTableValue([1,50,34,99,547,3]);
// var_dump(ftAverageTableValue([1,50,34,99,547,3]));