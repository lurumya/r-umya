<?php
require_once('../Utils/ft_errors.php');
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
    errorArgc();
    if (func_num_args() !== 2) {
        echo 'wrong number of function arguments !' . "\n";
        exit(-1);
    }
    errorTypeArgInt($arg1, $arg2);
    return ($arg1 / $arg2);
}

// ne fonctionne pas avec un seul argument
//divideArgs(20, 4);
divideArgs();