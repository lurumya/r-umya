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
// A ma connaissance le mot public devant une fonction est à mettre dans le cadre d'une méthode.

function functionName() : int {
    return "3.14";
} // cette fonction retourne 3 car "3.14" est "converti" en int et non en float.


function functionName2() : ?float {
    return null;
} // "?" indique que le retour de la fonction peut également etre null. Cette fonction retourne null.
// J'ai cru voir que le "?" fonctionne surtout dans le cas ou l'on doit retourner null. Je dois creuser ce point.


function functionName3() : float {
    return "3.14";
} // Cette fonction retourne 3.14 (float). Là encore il y a une forme de convertion. J'imagine qu'il faudrait
// que je comprenne mieux comment l'interpréteur fonctionne. 


function functionName4() : float {
    return (float)"3.14";
} // Ici on fait un "cast" en float mais c'est inutile car le retour de la fonction 
// est déjà défini comme un float.


function functionName5() : void {
    return null;
} // Ici il y a une erreur car la fonction est définie pour ne rien renvoyer, alors qu'on lui retourne un null.
// Une fonction qui ne retourne rien est classiquement utiliser pour afficher des choses.

function functionName6() : ?void {
    return null;
} // Ici on est en présence d'une exception ; null ("?") ne peut pas etre renvoyé 
// avec une fonction de type void.
