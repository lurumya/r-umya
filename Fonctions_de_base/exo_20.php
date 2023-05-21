<?php
/*
=====================================================================================
Page | numéro de l'exercice : p.8 | exo 20

Description :

Explications :
Ecrire une fonction qui retourne vrai et prend en paramètre une string 
si la chaîne contient « Rumya » (à écrire avec les fonctions de base php)

Commentaires :

=====================================================================================
*/

function strIsRumya($str) : bool {

    if (strcmp($str, "Rumya") === 0)
        return true;
    return false;
}

// var_dump(strIsRumya("Rumya"));