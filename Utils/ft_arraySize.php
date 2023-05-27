<?php
/*
=====================================================================================
Page | numéro de l'exercice :

Description :

Explications :

Commentaires :

=====================================================================================
*/

function arraySize($tab) : int {
    $i = 0;
    foreach ($tab as $item)
        $i++; 
    return $i;
}