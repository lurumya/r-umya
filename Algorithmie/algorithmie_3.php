<?php

// Ecrire une fonction qui renvoie true 
// si le nombre envoyé en paramètre est pair, false sinon.

function ftCheckEvenNumber($nbr) : ?bool {
    if ($nbr % 2 != 0)
        return false;
    elseif ($nbr % 2 == 0)
        return true;
    return null;
}

//ftCheckEvenNumber(45);
var_dump(ftCheckEvenNumber(-43));