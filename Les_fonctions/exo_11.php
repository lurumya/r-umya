<?php
require_once('../POO/Errorhandling.php');
/*
=====================================================================================
Page | numéro de l'exercice : p.5 | exo 11

Description :
Ecrire une fonction qui prendra 2 arguments de type entiers 
et qui renverra le résultat de la division de ces 2 arguments.

Explications :

Commentaires :

=====================================================================================
*/

function divideArgs($arg1, $arg2) : int {
    Errorhandling::errorArgc();
    //Errorhandling::errorParamNbr(2);
    if (func_num_args() !== 2) {
        echo 'Wrong number of function arguments !' . "\n";
        exit(255);
    }
    Errorhandling::errorTypeArgInt($arg1, $arg2);
    return ($arg1 / $arg2);
}


// ne fonctionne pas avec un seul argument ou aucun
//divideArgs(20);
//divideArgs();
//divideArgs(20, 4);
