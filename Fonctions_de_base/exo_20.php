<?php
require_once('../POO/Errorhandling.php');
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

/**
 * Retour global sur la structure du code (ca ne veut pas dire que ton code est faux):
 * Dans une fonction si c'est possible, il est préféréble de n'avoir qu'un seul return, ça rend le code plus facile à lire
 * Tester le nombre de paramètre est utile en C, en php pas vraiment, si un paramètre est déclaré dans la méthode alors s'il n'est pas présent il y aura une erreur, ton test ne sera jamais appelé
 *
 */

function strIsRumya($str = '') : bool {
    Errorhandling::errorArgc();
    if (func_num_args() !== 1) {
        echo 'Wrong number of function arguments !' . "\n";
        exit(255);
    }
    // ton test pourrait être évité si tu modifies le paramètre comme suit :
    // function strIsRumya(string $str = '') : bool {
    // ainsi c'est php qui vérifiera si c'est bien un string
    Errorhandling::errorTypeArgStr($str);
    // ton test va refuser le paramètre vide '', pourtant c'est autorisé
    Errorhandling::errorEmptyArg($str);
    if (strcmp($str, 'Rumya') === 0)
        return true;
    return false;
}


//strIsRumya('RuMya');
//strIsRumya('');
// Erreur php, type mismatch, on attend une chaine de caractère mais c'est un tableau qui est donné
//strIsRumya(5);
//strIsRumya();
//strIsRumya('asdf');
// Erreur php, impossible d'appeler avec 2 arguments si un seul est attendu
//strIsRumya('RuMya', 6);
// Erreur php, impossible d'appeler avec 2 arguments si un seul est attendu
//strIsRumya('RuMya', 'str');
// Erreur php, type mismatch, on attend une chaine de caractère mais c'est un tableau qui est donné
//strIsRumya([]);

//var_dump(strIsRumya('RuMya'));
//var_dump(strIsRumya(''));
// Erreur php, impossible d'appeler avec 2 arguments si un seul est attendu
//var_dump(strIsRumya('RuMya', 'str'));
// Erreur php, type mismatch, on attend une chaine de caractère mais c'est un int qui est donné
//var_dump(strIsRumya(59));


/**
 * Ma solution à l'exo :
 */
function isRumya(?string $str) : bool {
    $isRumya = false;
    if (strcmp($str, 'Rumya') === 0){
        $isRumya = true;
    }
    return $isRumya;
}

//isRumya('toto') // false
//isRumya('Rumyo') // false
//isRumya('Rumya') // true
//isRumya('toto') // false
//isRumya() // false
//isRumya(null) // false