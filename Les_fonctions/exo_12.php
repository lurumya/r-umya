<?php
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

function smallerArgs($arg1, $arg2) : int {
    if (arg1 < arg2) {
        return (arg1);
    }
    else if (arg1 > arg2) {
        return (arg2);
    }
    else {
        echo "Egalité ou autre erreur !";
        exit (1);
    }
}

// echo smallerArgs($arg1, $arg2);