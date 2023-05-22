<?php
/*
=====================================================================================
Page | numéro de l'exercice : p.8 | exo 19

Description :
Ecrire la fonction inverse, on lui donne un tableau 
et elle retourne une phrase avec des espaces entre chaque mot.

Explications :

Commentaires :
Bon... Meme si ça n'est pas précisé, je voulais faire cet exo sans utiliser de fonction interne de php.
Histoire de faire preuve de beaucoup de mauvaise foi, je me souviens que dans votre framework
vous utilisez également cette fonction (ou explode, je ne me rappelle plus). Voilà, mauvaise foi terminée !
=====================================================================================
*/

function arrayToStr(array $tab) : string {
    return implode(" ", $tab);
}

//var_dump(arrayToStr(['Salut', 'comment', 'tu', 'vas', '?']));