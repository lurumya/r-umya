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

function ft_strToArray($str = 0) : array {
    Errorhandling::errorArgc();
    if (func_num_args() !== 1) {
        echo 'Wrong number of function arguments !' . "\n";
        exit(255);
    }
    Errorhandling::errorTypeArgStr($str);
    Errorhandling::errorEmptyArg($str);
    return explode(' ', $str);
}

//ft_strToArray('Salut comment tu vas ?');
//ft_strToArray('');
//ft_strToArray();
//ft_strToArray(5);
//ft_strToArray('Salut comment tu vas ?', 5);
//ft_strToArray('Salut comment tu vas ?', 'str');
//ft_strToArray([]);

//ft_strToArray('Salut comment tu vas ?');
//var_dump(ft_strToArray('Salut comment tu vas ?'));
//ft_strToArray('Salut comment tu vas ?');
//ft_strToArray('');
//var_dump(ft_strToArray(56));
//ft_strToArray('Salut comment tu vas ?', 'str');
