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

function ftCheckEvenNumber($nbr) : ?bool {
    if ($nbr % 2 != 0)
        return false;
    elseif ($nbr % 2 == 0)
        return true;
    return null;
}

// ftCheckEvenNumber(45);
// var_dump(ftCheckEvenNumber(-43));