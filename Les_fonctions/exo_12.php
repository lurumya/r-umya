<?php
require_once('../POO/Errorhandling.php');
/*
=====================================================================================
Page | numéro de l'exercice : p.5 | exo 12

Description :
Ecrire une fonction qui prendra 2 arguments 
et qui renverra le plus petit des 2

Explications :

Commentaires :

=====================================================================================
*/

function smallerArgs($arg1 = 0, $arg2 = 0) : int {
    Errorhandling::errorArgc();
    if (func_num_args() !== 2) {
        echo 'Wrong number of function arguments !' . "\n";
        exit(255);
    }
    Errorhandling::errorTypeArgInt($arg1, $arg2);
    if ($arg1 < $arg2) {
        return ($arg1);
    }
    else if ($arg1 > $arg2) {
        return ($arg2);
    }
    return -1;
}

//echo smallerArgs(52, 21) . "\n";
//smallerArgs();
//smallerArgs(52);
//smallerArgs(52, 'str');
//smallerArgs([]);
//smallerArgs('');
//smallerArgs(52, 21);