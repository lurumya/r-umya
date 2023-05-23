<?php
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

function checkEvenNumber($nbr) : ?bool {
    if ($nbr % 2 !== 0)
        return false;
    elseif ($nbr % 2 === 0)
        return true;
    else
        return null;
}

//var_dump(checkEvenNumber(25));