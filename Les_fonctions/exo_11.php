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

function divideArgs(int $arg1 = 0, int $arg2 = 0) : int {
    Errorhandling::errorArgc();
    return ($arg1 / $arg2);
}

//echo intdiv(5, 4) . "\n"; // bizarre ms logique
//divideArgs(5, 'str');
//divideArgs(20);
//divideArgs('str');
//divideArgs();
//divideArgs(20, 'str');
//divideArgs('');
//echo divideArgs(5, 'str') . "\n";
