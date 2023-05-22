<?php
/*
=====================================================================================
Page | numéro de l'exercice : p.5 | exo 10

Description :
Ces fonctions sont elles correctes ? 
Quelles seront les valeurs retournées ?

Explications :

Commentaires :
=====================================================================================
*/

// Première élément problèmatique, le mot public devant toutes les fonctions.
// Le mot public devant une fonction est à mettre à l'intérieur d'une méthode.

function functionName() : int {
    return "3.14";
} // cette fonction retourne 3 car "3.14" est "converti" en int et non en float.


function functionName2() : ?float {
    return null;
} // "?" indique que le retour de la fonction peut également etre null. Cette fonction retourne null.


function functionName3() : float {
    return "3.14";
} // Cette fonction retourne 3.14 (float)


function functionName4() : float {
    return (float)"3.14";
} // Ici on fait un "cast" en float mais c'est inutile car le retour de la fonction 
// est déjà défini comme un float.


function functionName5() : void {
    return null;
} // Ici il y a une erreur car la fonction est définit pour ne rien renvoyer, alors qu'on lui retourne un null.
// Une fonction qui ne retourne rien est classiquement utiliser pour afficher des choses.

function functionName6() : ?void {
    return null;
} // Ici on est en présence d'une exception ; null ("?") ne peut pas etre renvoyé 
// avec une fonction retournant void
