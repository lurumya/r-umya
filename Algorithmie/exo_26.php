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

function checkEvenNumber(int $nbr = 0) : ?bool {
    Errorhandling::errorArgc();
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