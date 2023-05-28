<?php
require_once('../POO/Errorhandling.php');
/*
=====================================================================================
Page | numéro de l'exercice : p.8 | exo 17

Description :
Ecrire une fonction qui prend en paramètre une string et retourne 
le premier caractère en majuscule (à écrire avec les fonctions de base php)

Explications :

Commentaires :

=====================================================================================
*/

function strFirstCharUp($str) : string {
    Errorhandling::errorArgc();
    if (func_num_args() !== 1) {
        echo 'Wrong number of function arguments !' . "\n";
        exit(255);
    }
    Errorhandling::errorTypeArgStr($str);
    Errorhandling::errorEmptyArg($str);
    return ucfirst($str[0]);
}


//echo strFirstCharUp('abc') . "\n";
//echo strFirstCharUp('') . "\n";
//echo strFirstCharUp(45) . "\n";
//echo strFirstCharUp('salut', 'test') . "\n";