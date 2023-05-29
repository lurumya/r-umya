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

function divideArgs($arg1 = 0, $arg2 = 0) : int {
    Errorhandling::errorArgc();
    //Errorhandling::errorParamNbr(2);
    if (func_num_args() !== 2) {
        echo 'Wrong number of function arguments !' . "\n";
        exit(255);
    }
    Errorhandling::errorTypeArgInt($arg1, $arg2);
    return ($arg1 / $arg2);
}


//divideArgs(20);
//divideArgs('str');
//divideArgs();
//divideArgs(20, 'str');
//divideArgs('');
//divideArgs(20, 4);
