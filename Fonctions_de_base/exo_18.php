<?php
require_once('../POO/Errorhandling.php');
/*
=====================================================================================
Page | numéro de l'exercice : p.8 | exo 18

Description :
Ecrire une fonction qui retourne un tableau de tous les mots 
d’une string qu’on lui a donné en paramètre. 
Exemple : Bonjour Angelo est ce que ca va ?
Doit donner :

Array {
 [0] => Bonjour
 [1] => Angelo
 [2] => Est
 [3] => ce
 [4] => que
 [5] => ca
 [6] => va
 [7] => ?
}

Explications :

Commentaires :
Bon... Meme si ça n'est pas précisé, je voulais faire cet exo sans utiliser de fonction interne de php.
Histoire de faire preuve de beaucoup de mauvaise foi, je me souviens que dans votre framework
vous utilisez également cette fonction (ou implode, je ne me rappelle plus). Voilà, mauvaise foi terminée !
=====================================================================================
*/

function strToArray(string $str = '') : array {
    Errorhandling::errorArgc();
    return explode(' ', $str);
}

//strToArray('Salut comment tu vas ?');
//strToArray('');
//strToArray();
//strToArray(5);
//strToArray('Salut comment tu vas ?', 5);
//strToArray('Salut comment tu vas ?', 'str');
//strToArray([]);

//strToArray('Salut comment tu vas ?');
//var_dump(strToArray('Salut comment tu vas ?'));
//strToArray('Salut comment tu vas ?');
//strToArray('');
//var_dump(strToArray(56));
//strToArray('Salut comment tu vas ?', 'str');
