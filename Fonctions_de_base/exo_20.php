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
function isRumya(?string $str) : bool { // Angelo : (sauf erreur, j'ai l'impression que tu as oublié de mettre : $str = '';
    $isRumya = false;                   // sinon ça fait une erreur si tu ne mets aucun argument à la fonction
    if (strcmp($str, 'Rumya') === 0){   // (et je comprends pk)). Par contre, je ne comprends pas très bien pk
        $isRumya = true;                // ce code est plus opti que celui de l'exo 21 - ligne 25 à 27.
    }                                   // Est-ce pour une question de visibilité ?
    return $isRumya;                    // Parce que dans l'absolu tu crées une variable alors qu'on pourrait faire sans non ?
}                                       // De plus, je ne comprends pas, ici, la pertinence de pouvoir avoir la possibilité "d'initialiser"
                                        // l'argument $str à null. ?
//isRumya('toto') // false              // Concernant les erreurs et les explications que tu m'as fournies ci-dessus, j'ai compris la logique
//isRumya('Rumyo') // false             // ou la méthodologie que je dois adopter ! J'ai géré cela de cette façon car à 42, on nous disait
//isRumya('Rumya') // true              // qu'il fallait jamais avoir de messages d'erreur. Ainsi, quand un étudiant venait corriger un exo,
//isRumya('toto') // false              // le but (un peu malsain) était de ne jamais avoir d'erreur (du compilateur j'imagine, j'ai pas assez
//isRumya(); // false                   // de connaissances sur ce point pour etre plus précis), sinon on ne validait pas l'exo ou le projet.
//isRumya(null) // false                # PS: Le but de ces commentaires est de vous apportez plus de "matière" pour mon entretien !

//var_dump(isRumya(null));