<?php
require_once('../POO/Errorhandling.php');
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

function arrayToStr($tab) : string {
    Errorhandling::errorArgc();
    if (func_num_args() !== 1) {
        echo 'Wrong number of function arguments !' . "\n";
        exit(255);
    }
    Errorhandling::errorEmptyArg($tab);
    Errorhandling::errorTypeArgTabStr($tab);
    return implode(' ', $tab);
}

//var_dump(arrayToStr(['Salut', 'comment', 'tu', 'vas', '?']));
//arrayToStr(['Salut', 'comment', 'tu', 'vas', '?']);
//arrayToStr(['Salut', 5, 'tu', 'vas', '?']);
//var_dump(arrayToStr([]));