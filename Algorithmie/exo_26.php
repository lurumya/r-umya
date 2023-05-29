<?php
require_once('../POO/Errorhandling.php');
/*
=====================================================================================
Page | numéro de l'exercice : p.10 | exo 26

Description :
Ecrire une fonction qui renvoie true si le nombre 
envoyé en paramètre est pair, false sinon.

Explications :

Commentaires :

=====================================================================================
*/

function checkEvenNumber($nbr = 0) : ?bool {
    Errorhandling::errorArgc();
    if (func_num_args() !== 1) {
        echo 'Wrong number of function arguments !' . "\n";
        exit(255);
    }
    Errorhandling::errorEmptyArg($nbr);
    Errorhandling::errorTypeOneArgInt($nbr);
    if ($nbr % 2 !== 0)
        return false;
    elseif ($nbr % 2 === 0)
        return true;
    return null;
}

//checkEvenNumber('str');
//checkEvenNumber('');
//checkEvenNumber(25, 3);
//checkEvenNumber(25);
//checkEvenNumber([]);
//checkEvenNumber();
//var_dump(checkEvenNumber(25));