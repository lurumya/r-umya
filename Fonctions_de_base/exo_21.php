<?php
require_once('../POO/Errorhandling.php');
/*
=====================================================================================
Page | numéro de l'exercice : p.9 | exo 21

Description :
Modifier la fonction ci-dessus pour qu’elle fonctionne 
peut importe si les caractères sont accentués ou non

Explications :

Commentaires :
Voir les commentaires ci-dessous dans la fonction 
=====================================================================================
*/

/**
  * Remarque globale :
 * en général quand on veut s'abstraire des accents le plus simple est de les remplacer
 */

function strIsRumyaTwo($str = '') : bool {
    Errorhandling::errorArgc();
    if (func_num_args() !== 1) {
        echo 'Wrong number of function arguments !' . "\n";
        exit(255);
    }
    Errorhandling::errorTypeArgStr($str);
    Errorhandling::errorEmptyArg($str);

    //echo mb_detect_encoding($str) . "\n"; // comportement attendu : ASCII mais ça donne UTF-8 !??
    $str = mb_strtolower($str, 'UTF-8');
    //echo mb_detect_encoding($str) . "\n";
    
    //$str2 = 'salut';
    //echo mb_detect_encoding($str2) . "\n"; // comportement attendu ! Donne ASCII !
    $str = ucfirst($str);
    if (strcmp($str, 'Rumyaé') === 0) // pour vérifier que les accents fonctionnent correctements
        return true;
    return false;
}

//strIsRumyaTwo('RuMya');
//strIsRumyaTwo('');
//strIsRumyaTwo(5);
//strIsRumyaTwo();
//strIsRumyaTwo('asdf');
//strIsRumyaTwo('RuMya', 6);
//strIsRumyaTwo('RuMya', 'str');
//strIsRumyaTwo([]);

//var_dump(strIsRumyaTwo('ruMyaÉ'));
//strIsRumyaTwo('ruMyaÉ');
//var_dump(strIsRumyaTwo(''));
//var_dump(strIsRumyaTwo('RuMya', 'str'));
//var_dump(strIsRumyaTwo(59));